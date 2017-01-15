<?php
/* CONFIG START. DO NOT CHANGE ANYTHING IN OR AFTER THIS LINE. */
// $Id: d0b35334cb0047dee8f81af8a8a5b978f727c6a9 $
$conf['vhosts'] = false;
$conf['debug_level'] = E_ALL & ~E_NOTICE;
$conf['max_exec_time'] = 0;
$conf['compress_pages'] = true;
$conf['secret_key'] = 'pUIS1Z7hl-TwPUBIfU_g6_L';
$conf['umask'] = 077;
$conf['testdisable'] = false;
$conf['use_ssl'] = 2;
$conf['server']['name'] = $_SERVER['SERVER_NAME'];
// $conf['server']['port'] = 80;
$conf['server']['port'] = 8080;
$conf['urls']['token_lifetime'] = 30;
$conf['urls']['hmac_lifetime'] = 30;
$conf['urls']['pretty'] = false;
$conf['safe_ips'] = array();
$conf['session']['name'] = 'Horde';
$conf['session']['use_only_cookies'] = true;
$conf['session']['timeout'] = 0;
$conf['session']['cache_limiter'] = 'nocache';
$conf['session']['max_time'] = 72000;
$conf['cookie']['domain'] = '';
$conf['cookie']['path'] = '/';
$conf['sql']['username'] = 'root';
$conf['sql']['password'] = 'password';
$conf['sql']['socket'] = '/var/run/mysqld/mysqld.sock';
$conf['sql']['protocol'] = 'unix';
$conf['sql']['database'] = 'horde';
$conf['sql']['charset'] = 'utf-8';
$conf['sql']['ssl'] = false;
$conf['sql']['splitread'] = false;
$conf['sql']['phptype'] = 'mysql';
$conf['nosql']['phptype'] = false;
$conf['ldap']['useldap'] = false;
$conf['auth']['admins'] = array('adminuser');
$conf['auth']['checkip'] = true;
$conf['auth']['checkbrowser'] = true;
$conf['auth']['resetpassword'] = true;
$conf['auth']['alternate_login'] = false;
$conf['auth']['redirect_on_logout'] = false;
$conf['auth']['list_users'] = 'list';
$conf['auth']['params']['app'] = 'imp';
$conf['auth']['driver'] = 'application';
$conf['auth']['params']['count_bad_logins'] = false;
$conf['auth']['params']['login_block'] = false;
$conf['auth']['params']['login_block_count'] = 5;
$conf['auth']['params']['login_block_time'] = 5;
$conf['signup']['allow'] = false;
$conf['log']['priority'] = 'DEBUG';
$conf['log']['ident'] = 'HORDE';
$conf['log']['name'] = '/tmp/horde.log';
$conf['log']['params']['append'] = true;
$conf['log']['params']['format'] = 'default';
$conf['log']['type'] = 'file';
$conf['log']['enabled'] = true;
$conf['log_accesskeys'] = false;
$conf['prefs']['maxsize'] = 65535;
$conf['prefs']['driver'] = 'KolabImap';
$conf['alarms']['params']['driverconfig'] = 'horde';
$conf['alarms']['params']['ttl'] = 300;
$conf['alarms']['driver'] = 'Sql';
$conf['group']['driverconfig'] = 'horde';
$conf['group']['driver'] = 'Sql';
$conf['perms']['driverconfig'] = 'horde';
$conf['perms']['driver'] = 'Sql';
$conf['share']['no_sharing'] = false;
$conf['share']['auto_create'] = true;
$conf['share']['world'] = true;
$conf['share']['any_group'] = false;
$conf['share']['hidden'] = false;
$conf['share']['cache'] = false;
$conf['share']['driver'] = 'Kolab';
$conf['cache']['default_lifetime'] = 86400;
$conf['cache']['params']['sub'] = 0;
$conf['cache']['driver'] = 'File';
$conf['cache']['use_memorycache'] = '';
$conf['cachecssparams']['url_version_param'] = true;
$conf['cachecss'] = false;
$conf['cachejsparams']['url_version_param'] = true;
$conf['cachejs'] = false;
$conf['cachethemes'] = false;
$conf['lock']['params']['driverconfig'] = 'horde';
$conf['lock']['driver'] = 'Sql';
$conf['token']['params']['driverconfig'] = 'horde';
$conf['token']['driver'] = 'Sql';
$conf['history']['params']['driverconfig'] = 'horde';
$conf['history']['driver'] = 'Sql';
$conf['davstorage']['params']['driverconfig'] = 'horde';
$conf['davstorage']['driver'] = 'Sql';
$conf['mailer']['params']['sendmail_path'] = '/usr/lib/sendmail';
$conf['mailer']['params']['sendmail_args'] = '-oi';
$conf['mailer']['type'] = 'sendmail';
$conf['vfs']['params']['driverconfig'] = 'horde';
$conf['vfs']['type'] = 'Sql';
$conf['sessionhandler']['type'] = 'Builtin';
$conf['sessionhandler']['hashtable'] = false;
$conf['spell']['driver'] = '';
$conf['gnupg']['keyserver'] = array('pool.sks-keyservers.net');
$conf['gnupg']['timeout'] = 10;
$conf['nobase64_img'] = false;
$conf['image']['driver'] = false;
$conf['exif']['driver'] = 'Bundled';
$conf['timezone']['location'] = 'ftp://ftp.iana.org/tz/tzdata-latest.tar.gz';
$conf['problems']['email'] = 'webmaster@example.com';
$conf['problems']['maildomain'] = 'example.com';
$conf['problems']['tickets'] = false;
$conf['problems']['attachments'] = true;
$conf['menu']['links']['help'] = 'all';
$conf['menu']['links']['prefs'] = 'authenticated';
$conf['menu']['links']['problem'] = 'all';
$conf['menu']['links']['login'] = 'all';
$conf['menu']['links']['logout'] = 'authenticated';
$conf['portal']['fixed_blocks'] = array();
$conf['accounts']['driver'] = 'null';
$conf['user']['verify_from_addr'] = false;
$conf['user']['select_view'] = true;
$conf['facebook']['enabled'] = false;
$conf['twitter']['enabled'] = false;
$conf['urlshortener'] = false;
$conf['weather']['provider'] = false;
$conf['imap']['server'] = '192.168.1.51';
$conf['imap']['port'] = 143;
$conf['imap']['secure'] = 'none';
$conf['imap']['maildomain'] = 'theuptairsroom.com';
$conf['imap']['cache_folders'] = true;
$conf['imap']['cache'] = 'Mock';
$conf['imap']['strategy'] = 'Token';
$conf['imap']['enabled'] = true;
$conf['imsp']['enabled'] = false;
$conf['kolab']['enabled'] = false;
$conf['hashtable']['driver'] = 'none';
$conf['activesync']['params']['driverconfig'] = 'horde';
$conf['activesync']['storage'] = 'Sql';
$conf['activesync']['no_maillogsync'] = false;
$conf['activesync']['emailsync'] = true;
$conf['activesync']['version'] = '14.1';
$conf['activesync']['auth']['type'] = 'basic';
$conf['activesync']['autodiscovery'] = 'full';
$conf['activesync']['outlookdiscovery'] = false;
$conf['activesync']['logging']['path'] = '/tmp';
$conf['activesync']['logging']['level'] = '2';
$conf['activesync']['logging']['type'] = 'perdevice';
$conf['activesync']['ping']['heartbeatmin'] = 60;
$conf['activesync']['ping']['heartbeatmax'] = 2700;
$conf['activesync']['ping']['heartbeatdefault'] = 480;
$conf['activesync']['ping']['deviceping'] = true;
$conf['activesync']['ping']['waitinterval'] = 15;
$conf['activesync']['ping']['maximumwindowsize'] = 0;
$conf['activesync']['enabled'] = true;
/* CONFIG END. DO NOT CHANGE ANYTHING IN OR BEFORE THIS LINE. */