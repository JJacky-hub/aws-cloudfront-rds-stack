<?php
$_SERVER['HTTPS'] = 'on';
define('WP_HOME', 'DATA');
define('WP_SITEURL', 'DATA_URL');

define( 'DB_NAME', 'DATABASE_NAME' );
define( 'DB_USER', 'USERNAME' );
define( 'DB_PASSWORD', 'DATA_PASSWORD' );
define( 'DB_HOST', 'your-rds-endpoint.eu-north-1.rds.amazonaws.com' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'aws-final-local-key-1');
define('SECURE_AUTH_KEY',  'aws-final-local-key-2');
define('LOGGED_IN_KEY',    'aws-final-local-key-3');
define('NONCE_KEY',        'aws-final-local-key-4');
define('AUTH_SALT',        'aws-final-local-key-5');
define('SECURE_AUTH_SALT', 'aws-final-local-key-6');
define('LOGGED_IN_SALT',   'aws-final-local-key-7');
define('NONCE_SALT',       'aws-final-local-key-8');

$table_prefix = 'wp_';
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
