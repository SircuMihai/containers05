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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '>eM#4BAw`Xr`cC74^q~<{4:)7xw*V8yZ=C+xSRhSswLt:A(:nNdiA;n[K@At~JKj' );
define( 'SECURE_AUTH_KEY',  '^0OI0*6y=n#|Z;e7fr-^@a)6@*K(aJl_jd- 4>T2Inf,x*T[QN*k ]0x~q2=]8O9' );
define( 'LOGGED_IN_KEY',    'g<BdJq.Zoe^OX@ssZtr!l0e2]G~fDWQ_vY{5G,%cRDgH+DUd&+alMSiutvK.epHz' );
define( 'NONCE_KEY',        '7~<bI@]F@{3)pW^aVTm;sItQ*RQ76P@5w_74wX#,QJ4(cZ1>2AKE,+6F!~q-udN=' );
define( 'AUTH_SALT',        '=HSf]a*H1=UIZuX$oAl,Nn|u:xvoy>[fMfZVg{g}$y#pLrJ3f1H0zVPB~fL.bHsv' );
define( 'SECURE_AUTH_SALT', 'kR,v9#Lf9][-^a|IE(>J`4|1$.?%;FwAZh13^w7$egt@fK3fclA+E-AW_n5_pqI/' );
define( 'LOGGED_IN_SALT',   'YCZ?Y<=B~X.]}Tf7pF?hc/^)q|zkpJ&5fX;h-@#(y<n+U>C]zx3F(hb#|9a)fqg+' );
define( 'NONCE_SALT',       'X;?#YDbhDIY)Dy%0][,SZJrlKouv3b4Ivxb3HcbiC}fK`n!>|zp;Y@gtdwF!YH;0' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
