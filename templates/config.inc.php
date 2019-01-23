<?php

// {{ ansible_managed }}

$cfg['blowfish_secret'] = '{{ phpmyadmin_blowfish }}';

$cfg['Servers'][1]['auth_type'] = 'cookie';
$cfg['Servers'][1]['host'] = '{{ phpmyadmin_db_host | mandatory }}';
$cfg['Servers'][1]['compress'] = false;
$cfg['Servers'][1]['AllowNoPassword'] = false;

$cfg['UploadDir'] = '{{ phpmyadmin_path }}/upload';
$cfg['SaveDir'] = '{{ phpmyadmin_path }}/save';
