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
define( 'DB_NAME', 'ncm_projects' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'test' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '/S!.6w_Jc8]MFvtL;DvS%:OL4KLa(I.PI:pg0(L9s9Dcfy57yLv$ZxCHp^/va=%Q' );
define( 'SECURE_AUTH_KEY',  '6HRlo&VS`Uwci_-tpw?KQPR*K%;dE.U! Y(,cy1-`oH^/IVRCX)QiJVVlbcbt9a8' );
define( 'LOGGED_IN_KEY',    '#|[u;V3:0zu1}C=+SD{r>(6c.H$w6U>RqO6h^O7%?GF[k+`+&N-vtF31nYij$3tf' );
define( 'NONCE_KEY',        'P5b:U~*eu}:qEM^ohAvNT}*5$S3M~>JW.Z-Z*v+l57VNaej]&jTY0ZF~J67oFS(*' );
define( 'AUTH_SALT',        '}rxC)5HJtu#Lts;wH/:gGs4!6H_[EN4BsUbmuy(V!;v =.bdQ}7 FoPZweF([yYV' );
define( 'SECURE_AUTH_SALT', '*]zP{9:S.r~^!Ws_(jR%4zISEVa98k5/Ii;WS-7nW-gWkfT6+^%6Jo32pdFbaNo_' );
define( 'LOGGED_IN_SALT',   'D+ZCn/T?-6Av^S* Io iIs~~FkWlCBT ]TWJ[oK8|N;_/~UGo2~LApQ><ZZ,)[y4' );
define( 'NONCE_SALT',       'n^=zp59?68NR5;G=;AtiwDZA_Z*A&etB~}x{Fb+U;2c#e|Mzqn>EuAA>BvSg}#Z2' );

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
