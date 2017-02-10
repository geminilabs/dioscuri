<?php

// production | staging | development
define('WP_ENV', 'development');

define('ENVIRONMENTS', serialize([
	// 'production'  => 'https://example.com',
	// 'staging'     => 'https://staging.example.com',
	'development' => 'https://example.dev',
]));

define('DB_NAME',     '');
define('DB_USER',     '');
define('DB_PASSWORD', '');
define('DB_HOST',     'localhost');

$table_prefix = 'gl_';

// https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

define('SAVEQUERIES',  true);
define('SCRIPT_DEBUG', true);
define('WP_DEBUG',     true);
