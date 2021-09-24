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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'updiagramv2' );

/** MySQL database username */
define( 'DB_USER', 'itcgroup' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Tam0333833407' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '%`OQN*<U28]GisdSfDO#`MY-8$ -u^QC$CJ[TW9+H1E#@|YF%w#v.a=,X Ru$gCX' );
define( 'SECURE_AUTH_KEY',  ']sKW?XabKHy*Lft`HaBN:,!](3D1F,k<ji{E80RRawHX^=b~fsT0-8i;tLU|s2c)' );
define( 'LOGGED_IN_KEY',    '>63n;]_,$Qs!q+~6WBi6INL%ol1Zw2^V(Z[vB>AsbD[&p(js]yLW4Qir?<o,01/A' );
define( 'NONCE_KEY',        'oc94z;JqD?G0+A~[[XG{0so]=0{w xm{%F}G0{P+[ndMj:Q2snjKS8P~n}Ugg.Cr' );
define( 'AUTH_SALT',        '{wXE$Zs HmfvAs:%o#,%)}GzZ8KutzH;qL80#1#6ayF5xL|#TiC&#1W|}ShN|O_N' );
define( 'SECURE_AUTH_SALT', 'qI|%nxg2fZ86t`]G/ $q*katY+E<L 24IEK[;;~RCDzJtYk`5Xz1tcaM4ozG4clL' );
define( 'LOGGED_IN_SALT',   'iq@B4[E79wj/s49l<ui){9nIod,B&[zF`(Da/mA^{%$qYaG)8a|jOK_6COAf7Q*7' );
define( 'NONCE_SALT',       'q[=9n=@$j{b/V4H<8(Ytb`/*UwV?wUNnaLfZMDXEqmuZe^UqFZk6QRL6~hRTbXl;' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'SAVEQUERIES', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';	


/* 
	username: itcdev-tobias
	password: 3iFDxWTBxyqHoQR6@c	
*/