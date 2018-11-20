<?php
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
define('DB_NAME', 'itaca014_wp349');

/** MySQL database username */
define('DB_USER', 'itaca014_wp349');

/** MySQL database password */
define('DB_PASSWORD', '0Sp@pT(2I6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define( 'WP_MEMORY_LIMIT', '256M' );

// UPLOAD DE ARQUIVOS ATÉ 64 MB
// define('WP_MEMORY_LIMIT', '64MB');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mbdnqemnxqs7vdadxwei5k6ue3ajpvfhrzyecllrer34nxj9wj8l1nmsteu1jekd');
define('SECURE_AUTH_KEY',  'ui50mtpu2i5apfi1814solfhuxsss4gznrlrzgbntgey5sckr9lklqrpn4a6sqdi');
define('LOGGED_IN_KEY',    '2dvirnuqvimovtmzaerfasv9fv9qbe4qwhowjzrwpaych75ue4x7leite4w248pj');
define('NONCE_KEY',        'xbb5wbxhfyhjqwdkxv5frz1bcbha8kls11ulp0kmbkdyltr9zfv4nd7bdkjbcxhi');
define('AUTH_SALT',        'ewazw7sepl4snrpeeyxrmut7xhs73boe8tt3bdcgjryjr7zkuna2pu8zrb4ht7oq');
define('SECURE_AUTH_SALT', 'e5si0rtg23dodrixyz90fyrio0798qyf53y35bnjasoiokqj2tw5kxnoixvxxjdk');
define('LOGGED_IN_SALT',   'qtbhdn9k88yghd3elroawyqxkdpwdb0f4puxp8wjnskyybpsftbpim2nevnzhpkv');
define('NONCE_SALT',       'fztvcacbzl1luuesyls4pfb9x34zhyuip7fsokwmak5jy3ewrowxavldexg4ldsj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp5p_';

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
