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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');


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
define( 'AUTH_KEY',         'Y}mTf$m+K-Pn4sLA`=>tW/&`vFT/*=dYicO]Bq^ID/k[CO=&dY@v@uGA3!% l@oP' );
define( 'SECURE_AUTH_KEY',  '[N/Ob=(&>U@x+fv78}JzD0dhHIUDCF4$32oJAg_3${dd(pXButYSI*AN3)~IZrd.' );
define( 'LOGGED_IN_KEY',    'Cv](VQ,DDD-)=kI8W/lEU3a7Gr?-Jhw6@YOpLW.W=Y59`[aGtqzEPpK4,;[[wMPv' );
define( 'NONCE_KEY',        'X>G[F5Xnh,-@BtqQTt4E3VK&EcIss/y5#w)?Hr[ @-v#%nKAscia)*|{b^TRx12@' );
define( 'AUTH_SALT',        'RS7:p&pc|Of ]Jh1&2naBLEf+q$F=iNE:fb,q!-CH@e=3L0Opwf+,07uVvtE*+[P' );
define( 'SECURE_AUTH_SALT', 'XB:3 [TP3kV *8A+/2MKb8P0IW#WICtT&wz?lLf5%SnZw-~XwYO_J}i/1R)y0I!m' );
define( 'LOGGED_IN_SALT',   'GLJRnsO|.LMcU,oZD/[?|iNxBs[-:PohXVWJXm63Uv3//zVEZUfjRBUA+,DASj?M' );
define( 'NONCE_SALT',       '^ U|kp]<O[36C>|=-[yG04s1|4(^.&N9Ou*W0mUlJ*k1HF3+RX%EwWUDQH9A0,M<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
// Redis configuration
define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';