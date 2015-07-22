#!/usr/bin/env bash

echo 'Creating horde database.'
mysql -u root --password=$MYSQLPASSWORD -e "create database horde";

echo 'Provisioning Horde Groupware.'
mkdir $HORDEDIR

echo "Creating local PEAR install in $HORDEDIR"
pear config-create $HORDEDIR $HORDEDIR/pear.conf
pear -c $HORDEDIR/pear.conf install pear
$HORDEDIR/pear/pear -c $HORDEDIR/pear.conf channel-discover pear.horde.org
$HORDEDIR/pear/pear -c $HORDEDIR/pear.conf config-set umask 0022
$HORDEDIR/pear/pear -c $HORDEDIR/pear.conf config-set -c horde umask 0022

echo 'Setting preferred_state to beta.'
$HORDEDIR/pear/pear -c $HORDEDIR/pear.conf config-set preferred_state beta

echo 'Running horde_role script and setting horde_dir to $HORDEDIR'
$HORDEDIR/pear/pear -c $HORDEDIR/pear.conf install horde/horde_role
/vagrant/dohorderole.sh

echo 'Performing pear install.'
$HORDEDIR/pear/pear -c $HORDEDIR/pear.conf install -a -B horde/webmail

echo "Setting include_path into $HORDEDIR/config/horde.local.php"
echo -e "<?php\nini_set('include_path', '$HORDEDIR/pear/php' . PATH_SEPARATOR . ini_get('include_path'));" | sudo tee $HORDEDIR/config/horde.local.php

echo 'Running webmail-install.'
export PHP_PEAR_SYSCONF_DIR=$HORDEDIR
/vagrant/horde-install.sh

echo -e '$conf['server']['port'] = 8080;' | sudo tee -a $HORDEDIR/config/conf.php

echo "SetEnv PHP_PEAR_SYSCONF_DIR $HORDEDIR\n" >> /etc/apache2/apache2.conf