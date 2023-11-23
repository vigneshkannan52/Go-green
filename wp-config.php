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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'go-green_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'fD4+GP4*ya|+kr,fRJ)Hay)u~0LeaMVkd~A[sT7Tr2:4|PcYX%9,Wk#gBK;fYSh^' );
define( 'SECURE_AUTH_KEY',  'I+^ACCAHBBfvM$(wB%}]%=(jz+#qB{V#Cs_9j9<wQU|BB}kN< ?ZfN2{;j!j9nXk' );
define( 'LOGGED_IN_KEY',    '@X>s*|;r(%1%+A[H*p4&-bF>Zi{xmHq=Z2MV$2V&ptZG$;mOfCxTCZOL&GN[Tpbp' );
define( 'NONCE_KEY',        ' JPX(=&(wQ~yT$boiG_A+{DXxTlY&L%*Ld3T5aPY;Blx=pJyE]v=>7&Ip;r~d|;G' );
define( 'AUTH_SALT',        'lEMM2sy&Av*x2j~eWbN)0ODJiOWq+B:yL3>PrfzA!VW}p-Z)uY/gi(?c.h$R^w:4' );
define( 'SECURE_AUTH_SALT', '.hO5PrUe45JYY@U.dzt/n9Ed4t%nQdN8a1(c3q`)O28+r-t%Y:wM:{!r`kuDvP>8' );
define( 'LOGGED_IN_SALT',   'y/.r5RO1+8:!.8daEVN-SM-)P#PLfYP(!#5h|U`N^9;<niKZ?obBLlkIIG@(udc{' );
define( 'NONCE_SALT',       'A86{Qor-J|EMdA9ZBby^F-g+|Va?#gO#:=YB4BNk!=PP|]]av;P>V+jzLq6m2E6L' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
