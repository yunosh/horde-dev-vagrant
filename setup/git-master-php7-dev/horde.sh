#!/usr/bin/env bash

# Add PHP config to apache before restart.
# @todo should do this in shared/php7-dev.sh, but the file won't be in the VM.
cp /vagrant/conf/apache/php7.conf /etc/apache2/conf-available
a2enconf php7

#Clean up
apt-get auto-remove

echo 'Creating horde database.'
mysql -u root --password=$MYSQLPASSWORD -e "create database horde";

# Install Horde from source
apt-get install -y git
mkdir -p /horde/data
mkdir -p /horde/src

# Clone Git master
if [ "$GIT_DEPTH" = "shallow" ]
then
    git clone --depth 1 https://github.com/horde/horde.git /horde/src
else
    git clone https://github.com/horde/horde.git /horde/src
fi

# Needed so we can copy the install_dev.conf file.
chown vagrant:vagrant /horde/src/framework/bin

# Move prebuilt configuration over.
echo 'Copying configuration files.'
cp /vagrant/conf/horde/* /horde/src/horde/config/
cp /vagrant/conf/imp/* /horde/src/imp/config/
cp /vagrant/conf/kronolith/* /horde/src/kronolith/config/
cp /vagrant/conf/turba/* /horde/src/turba/config/
cp /vagrant/conf/ingo/* /horde/src/ingo/config/
chown www-data:www-data /horde/src/horde/config/conf.php

# Install framework
cp /vagrant/conf/install_dev.conf /horde/src/framework/bin
/horde/src/framework/bin/pear_batch_install -p ../framework/Role
/horde/src/framework/bin/install_dev

echo 'Restarting Apache.'
/etc/init.d/apache2 restart

/horde/src/horde/bin/horde-db-migrate
/horde/src/horde/bin/horde-db-migrate