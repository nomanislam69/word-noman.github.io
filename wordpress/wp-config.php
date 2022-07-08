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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '4czSUr}&lm^B|YYzbrQ-JA>9GS[Mb2Z5}58$TmQ_Nb1;FU5U<o_bS>oMdj$AD^]g' );
define( 'SECURE_AUTH_KEY',  'Or.Y&Z%|#y 4|EA<i7xTO/8[uo$ncM?l(_KeG_HQAo%W5NH6J2TAH91<F^_.1T<h' );
define( 'LOGGED_IN_KEY',    '9g.hK${2DB?Zaso@V]l#^P*knBwf]#N@0. <%NMvuXq#57g]`ZW)fKAVd}37Nl_T' );
define( 'NONCE_KEY',        '4I*Vd/J$+$L@Fo]?z9K`B`,T(7%tQ/Q!Opi=i7<N! z7_w=sgVI ++k7lrWmGTq!' );
define( 'AUTH_SALT',        ')F?ITVm2WP*TQ&^f!aYcKR&%OP:3;~.po?=UZB!Dt|*)n+(@5eP[9Yitw6ud[ zo' );
define( 'SECURE_AUTH_SALT', 'A B`18Pr Ngl[:2`f@iU&5~/-H.E+_NHz*t]qX;g]~74(`mwhHsT$S{J0m}=_LDl' );
define( 'LOGGED_IN_SALT',   '+=reZ#$hBOQ,Og7>k^DaRhfcQDAb/)ewdo-n,f|K:oT{lxl];|f>Uv0`cjJ,(78-' );
define( 'NONCE_SALT',       '8#CKrmd4y$(Fx1|s.:MIFFbw;7~2{>7x{oHSw5D^=,doEN*0`JH@_kEGg0<|C-?{' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
