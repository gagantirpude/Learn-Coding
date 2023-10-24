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
define( 'DB_NAME', 'website_elementer' );

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
define( 'AUTH_KEY',         '73Mp(%~CQX6YUxL1>xx-/KbQ)>8_s6h7NzY30`rt~cVHWrs,z:(=Y#YP)7^n60=O' );
define( 'SECURE_AUTH_KEY',  'JoK.KFvIYRCJEm?Uh(`42g]y3k5]PzSA;rGsY*[ BOJ<7Ib~i9xAu:PH|h-o_`Jv' );
define( 'LOGGED_IN_KEY',    'J5)Q>(vh.m9o[&w/<sH67]bQ0F}0FW/pJ #K+aku!2.y>?eF]z1vDm$8/s_CaL5=' );
define( 'NONCE_KEY',        ']m>[VJEdo<T4aAUsG(+heV7=!A]G 41>S09_]:Gjy3H%Z*SAbJC&gJx,CV;CF9Gf' );
define( 'AUTH_SALT',        'Oz 3S1{/5OZPtJAU#u~;)uEVUro*}M4mlg5%jy[`GXevLux5_7x}Jist5aHKe`vn' );
define( 'SECURE_AUTH_SALT', '1=O3PsiR?+nYh3=nj}XJL]F7>AXef{}DxrmfR:&>LRMsOgvx9IDY41qr7F}L9s$m' );
define( 'LOGGED_IN_SALT',   '}.Q`+I(5+)oJku[{*j6tY]>xH`1J)Fcytkj=(I+dF:~Z{}C)LQdUbyKo(?c]nn6X' );
define( 'NONCE_SALT',       'WPO7E@ !,ew_FAu7?@UFVN5Z&*&$tk=,7pn,9%P5z2!KF30$U1U>$ar2!6n=,H=L' );

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
