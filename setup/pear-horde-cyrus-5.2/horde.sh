#!/usr/bin/env bash

echo 'Creating horde database.'
mysql -u root --password=$MYSQLPASSWORD -e "create database horde";

echo 'Running webmail-install.'
echo "Configuring PEAR"
pear channel-discover pear.horde.org
pear config-set umask 0022 system
pear config-set preferred_state beta system
pear config-set auto_discover 1 system

echo "Installing Horde_Role and setting horde_dir to $HORDEDIR"
pear install horde/horde_role
pear config-set horde_dir $HORDEDIR system

echo "Performing PEAR installs"
pear install Date_Holidays-alpha#all Text_LanguageDetect-alpha
echo "Be patient, installing Horde now..."
pear install -a -B horde/webmail

echo "Running webmail-install"
/vagrant/horde-install.expect

echo "Finishing configuration"
cp /vagrant/conf/horde/* $HORDEDIR/config/
cp /vagrant/conf/ingo/* $HORDEDIR/ingo/config/
cp /vagrant/conf/imp/* $HORDEDIR/imp/config/
cp /vagrant/conf/turba/* $HORDEDIR/turba/config/
cp /vagrant/conf/kronolith/conf.php $HORDEDIR/kronolith/config/conf.d/kolab.php

# Outlook EAS testing requires SSL.
sudo a2enmod ssl
sudo a2ensite default-ssl

echo 'Restarting Apache.'
/etc/init.d/apache2 restart

# Purposely do not include the following in the conf.local.php file since they
# either are, or will be, switchable via vagrant config file.
#TODO configure this?
echo "Enabling EAS support."
cat /vagrant/conf.d/10-eas.php >> $HORDEDIR/config/horde.local.php

# Use IMAP AUTH?
if [ "$IMAP_AUTH" = "true" ]
then
  cat /vagrant/conf.d/10-imapauth.php >> $HORDEDIR/config/horde.local.php
  echo "<?php
\$servers['imap']['hordeauth'] = true;" >> $HORDEDIR/imp/config/backends.local.php
fi
