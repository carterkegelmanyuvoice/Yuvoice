<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'Yuvoice_user' );

/** Database password */
define( 'DB_PASSWORD', 'T4*7{6%i4d4AR1&' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KE1pgZ|,3%~/WeOgBW[mAI&F+mH+=y#{o,d6[j+F)swi+g_7}uUCg|*_&L_<X>]J');
define('SECURE_AUTH_KEY',  'R!hvP@=Wjj+hsa|02V3?/VlXyA}[.!VPiYioLcA@@F;o$,%S}<Z38]_#>&QW~M8{');
define('LOGGED_IN_KEY',    'q!wiRij2y_-TGJBn-.57<BTG7pnn/^-^PpNO( k!d!NK<Od!s^+c@BSFz3S`4E+5');
define('NONCE_KEY',        ')0fMPhWKzo}05:5x]~%1X`K3g/=M&^~)0sTOyo5m@&dBN-Ye{brzY-~35fUr:u7*');
define('AUTH_SALT',        '5f;(P*]r}gJWr n#(DgN2+p:a|A-3;fCJtAZ)t/,32elU*}TN#K8xX-@e<w?ClC`');
define('SECURE_AUTH_SALT', ']}U?P8bQxZ-Kpk_ %0jk~7H+-.NYiEh-Bk^u#d{We[(C<MB:vEwwu`>yW}:|.0yN');
define('LOGGED_IN_SALT',   's$+2,k:MW6r*gsQ`%{uVL+~R`JD?p6q[`}xiv$e+)p-Tde3+WF2_3G%d*uoUYrRp');
define('NONCE_SALT',       '`X|iziC]J_GPLn!%MqMR%U7ZqAO;SZ|><rdfII-_T.cv;;{ee9w/E^I^h5mwkDbf');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
