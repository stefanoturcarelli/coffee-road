<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '&2|$9[b#3Qp4]pWt`_+&mJ,8A@}Zy0nQU?7,&<u?v+|/ZS{H$Bzl SJ}>_*xr}_o' );
define( 'SECURE_AUTH_KEY',   ':=uFQbj k-K),XZn22.(^Z=Uw,@Y?|KrCT4+*`619SuM^2RR>:Usf:rk~Yzb~P&%' );
define( 'LOGGED_IN_KEY',     ':bW7fb{|[ih4hwd(quzKUsIB8h<gqR$sx;*v3FiIH1diWpfq}tAufgOn$$ST5*<M' );
define( 'NONCE_KEY',         'cx[0+p^AyYimS`=*{*9fnl7jb92F7k1TO+,v4Og_8cKx(cuIcnj~8_au`}M5EF/J' );
define( 'AUTH_SALT',         '>epLHYb5xGpLzwc8@:zT0B )NV2ZHEXJ6TQ_buH.hB@XK5SDFUy?i1&qt>1%;`{E' );
define( 'SECURE_AUTH_SALT',  '6)*>37<Y2tM;#q<1e$@AsD<.5`f#8SjnRgh!ipX~(D(?.(-gV_%!dmA}6?@Li$VK' );
define( 'LOGGED_IN_SALT',    'mz-}GMIt{*~Aj#a,+oiA0<xj{[GPhlQYo$;Y)S^9m+n^dP&vL?u]?(CzwheTi[=)' );
define( 'NONCE_SALT',        '<|ZjwK S.dqptx8V+{J0~y1n1b[I]o/=QAtP##}@h FO/beAb1Lc7mhDa*{WYec ' );
define( 'WP_CACHE_KEY_SALT', 'yX.W20xy.+}kI1aacz8)w1?WcGm*S0f|E#S)LX]]^5hZ?mn,6!w#()[({o&]e[vZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
