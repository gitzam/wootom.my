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
define( 'DB_NAME', 'test_wootom' );

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
define( 'AUTH_KEY',         'LI5Yb/iOt MX/.DxKiD_VeypNHZ/WLB+iw^`nA:)V_ dBNypwA3NOc:3wCjN;sj@' );
define( 'SECURE_AUTH_KEY',  '}$g_g9UU<jkTXPCi )}VfYX4OCeynU8%e#lj+x@}+0=lp)Dd+UQAcsV( @N(i_K,' );
define( 'LOGGED_IN_KEY',    'PmOgEC}@D!&HT2afpHk_IXwV_APAjr0u tBRGS^8YJbax-77/#g2+t/<%R/+?B?n' );
define( 'NONCE_KEY',        'J)V<pFTOR(+IXjs!(:hm46N[YRd?Lm%*@O!BXKW[A(N}WxTz`Elr6[Q,2hd<jr<#' );
define( 'AUTH_SALT',        'Sk,0.:hLiy_bt<k<_l2c;b/,&O`b6UENj|cLcRQU7$gvf}.3>(Zd{1rl<_$SqCO^' );
define( 'SECURE_AUTH_SALT', 'JiG%D;exL=4;AXCaF5OQ3&{AudsYEi.>hW+B0$4w7<-{p|[8,|M,M]q36p&S*^-D' );
define( 'LOGGED_IN_SALT',   ']VHgJkmAQ,Wr:sQY@Bo>:$%:Uu|LWq|YsLoYT2a/6AQ@Th8%h61Zj1<vS+JGm$+?' );
define( 'NONCE_SALT',       '^E!cvIvHz%OtrOO3`Yk)=4N?aZh|-dn=q@D1e>`?<*]%<4iux1J;FE}jF=</I`L>' );

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
