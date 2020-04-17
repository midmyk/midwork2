<?php

// full website url (where you've uploaded "public" folder) WITH a trailing slash
$config['host'] = '';

// database access details
$config['db_host'] = 'localhost';
$config['db_name'] = '';
$config['db_user'] = '';
$config['db_password'] = '';

//$config['db_port'] = '3307';
//$config['db_dsn'] = '';

/*
 * Routes and Paths
 */

// default route = controller/method
$route['default'] = 'home/index';

// path to app folder with trailing slash
define('APP_PATH', __DIR__ . '/');

// path to system folder with trailing slash
define('SYSTEM_PATH', __DIR__ . '/../system/');

// path to root directory
define('ROOT_PATH', __DIR__ . '/../');