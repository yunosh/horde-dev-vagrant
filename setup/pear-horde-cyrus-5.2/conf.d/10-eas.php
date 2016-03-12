<?php
$conf['activesync']['params']['driverconfig'] = 'horde';
$conf['activesync']['storage'] = 'Sql';
$conf['activesync']['emailsync'] = true;
$conf['activesync']['version'] = '14.1';
$conf['activesync']['auth']['type'] = 'basic';
$conf['activesync']['autodiscovery'] = 'full';
$conf['activesync']['outlookdiscovery'] = false;
$conf['activesync']['logging']['type'] = false;
$conf['activesync']['ping']['heartbeatmin'] = 60;
$conf['activesync']['ping']['heartbeatmax'] = 2700;
$conf['activesync']['ping']['heartbeatdefault'] = 480;
$conf['activesync']['ping']['deviceping'] = true;
$conf['activesync']['ping']['waitinterval'] = 15;
$conf['activesync']['enabled'] = true;