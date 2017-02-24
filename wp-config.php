<?php
ob_start();
error_reporting(0);
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ssschool_wpebe');

/** MySQL database username */
define('DB_USER', 'ssschool_wpebe');

/** MySQL database password */
define('DB_PASSWORD', 'o96P-V[40S');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qz8qencabfzbeibm4qweyktwdltwjkozmtd9nigygymoheuhdvuqhbcocqgtenyt');
define('SECURE_AUTH_KEY',  'pf1artqyacy8tjvbhgapsfuw7zy7whxzkamigczwqkkcbx7qhefbjmp7mbss8ams');
define('LOGGED_IN_KEY',    'ksddoxisvykgyy55i3jxwooqbusragwden0qtrhzxrlvap5nnb9r8lla2gmq1h6p');
define('NONCE_KEY',        'jpd4ux2nf9sfqbbcinuyfhlge3xytjqr6zzcd8zzzpt2znvrcm48uunnmc1qxuza');
define('AUTH_SALT',        '4bfipjopzexl6s3mivokpogqlubei9soathkvfxyd36javfw4pnbxnmsnd0vnjg9');
define('SECURE_AUTH_SALT', 't3yjwevpycl4xxvftwzhwshpntuldh2nuix7eqj4asa85rpupg8aeovcr8yrhhs5');
define('LOGGED_IN_SALT',   'rwsagpatlqgcfytu1myowwwpye2ucswcfq6tcfr3ix6r7tiby7czrdkeo11gxcf7');
define('NONCE_SALT',       'oyerro4q9wjjujjvp6hgflivdzbsamihkcfqcyzkceufnyl7tbxg08q4tgblgacy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
