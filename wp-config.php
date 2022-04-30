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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(398z6TTgQq7)nij_4IVl1jOaw}nGd&crmX8rNr7x<[Eq-_Ne/nZ.gcq~eUu5aMq' );
define( 'SECURE_AUTH_KEY',  'WYgEC;|EMGb{bTk!PbRY}b0L<4^Up@h6Dh3cG&3)U}UQjm~,)EBdg49i/U449FZX' );
define( 'LOGGED_IN_KEY',    'O;4.2]W{z})DC@.bn!n}<9TT5CBb31.dFm_?]= ~_6K=t[m6#/`D*.xX|-_(90TR' );
define( 'NONCE_KEY',        'X$Onm@g6cv-e-#fQ/CmI+[_Ahvk?MJ=@%ka2l6 V(}F0}pf-x)O=+JRnm)C-nb)u' );
define( 'AUTH_SALT',        'v]CV3F9.s;^my0yHn@WCqs$sWVH}&qb85F-xoYK{ &BvH/1%fpl>JH:dXMN>MRVv' );
define( 'SECURE_AUTH_SALT', '$p6=9?NXPx|-S*1H:~p/)k-!)}p{bq:ju5L]~9QO27il5Al:qbCc!M+T&PCFT?Ve' );
define( 'LOGGED_IN_SALT',   'clZ;P+vL*+yE:^AKLu+)vV/;.vi93m++H -,L{.a+kUNI{wvS}UY,G2O}q]rO51`' );
define( 'NONCE_SALT',       '@7>2r9]&IUi|XZw5n`qFRb+},>f~3.GP`P)HgTu},eh7A$!bOijX:,W MU0nqby7' );

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
