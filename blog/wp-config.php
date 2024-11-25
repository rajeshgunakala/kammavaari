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
define( 'DB_NAME', 'kammavaari_kammablog' );

/** MySQL database username */
define( 'DB_USER', 'kammavaari_kammablog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yne_~c&bcA_5' );

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
define( 'AUTH_KEY',         'V4/d9CoX;y0Ep,Wl?._O[v5-o/~lzJ<PrI80Lg[8Z(g@O7=!a7-e*-t>zoeBMxqI' );
define( 'SECURE_AUTH_KEY',  '!m:2v6(OjA2$/8cU6){p,$Ax&+QO{-1%}eBVy@n_l`eKh8G/.V_tG}p4QRM7g04^' );
define( 'LOGGED_IN_KEY',    '~Y!=+ID3[9@hMyLgM%U0byH|V!6JtLE`9})i_9~@`wxX~3Q*]NCwe||J[k7&:qHn' );
define( 'NONCE_KEY',        '^`G3$ng+w9$&UrBt$_7&&i~}c.8*}a .o<(p@3k`|D$S@}6fQ>*0u|Xg>*!n$M@M' );
define( 'AUTH_SALT',        '6}  1Nh77n:@KX6ISLKJJ)ytTWOXmn Jg,F>(u!n^g14+;+~ 7rK?I-=-RA=:Dri' );
define( 'SECURE_AUTH_SALT', 'bFz+vMkes}6o<~_|rL}f${EdPMvs?,H7 ([ZeBK1-z%>!D0(J84+Q[dz>,>f5@:M' );
define( 'LOGGED_IN_SALT',   '|S=DT2uR-mDf?dQg.]cvhaOl=a<B*uBoj+rCxalB+qe{cx@/{6>1|W5=+lL0H+tD' );
define( 'NONCE_SALT',       ':ZJHrLJ6gTJ1UdvOFJeGMC@W|W8oq->:Ev.5i&2S(8r]0yl=UI&Aw^pb;1=Te@jP' );

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
