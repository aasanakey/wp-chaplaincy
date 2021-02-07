<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'knustchaplaincy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_9W:jTLNS{D+[DfOMvhy*`c<V@t**ds<3Dg+zL@}t1q=(,u?JB->jmx>D|ZNx)mB' );
define( 'SECURE_AUTH_KEY',  '[*M(?D:6r!yga>vf&mywXZYyb{mzQYC,M^]`?`zyb@A0e_s*?j*:Gopo?~V@5]@&' );
define( 'LOGGED_IN_KEY',    '>ls9%ZHoQFYD!@Mj%TkZy]ixfa7YD*WH(8W!B{FV(yKVF6#my%&QPR+`bWf>M!=U' );
define( 'NONCE_KEY',        '7g/*ptK47sI(EHUMOqc]7$R/?UR0M59l1C{]P7[MZx>*nB(n-Op,F~[]RlgwtKxo' );
define( 'AUTH_SALT',        '[S3v$lMUs(NolOpc,jg1J-Z&Jv*^2+|8x{ $|*hHO8_GO19V6y%WG2%QIo}^XO]m' );
define( 'SECURE_AUTH_SALT', 'RJWC1I,ZjX8rC21^R0efVLKnE6quT^$}sq.?-_$U3M:%>|md=xgJ::epKsF1{+I4' );
define( 'LOGGED_IN_SALT',   '{!^3#gXME?6WMVbsl7I~~&Lax@BBxAE!6#7U</u)TPSCPLMphrI~3(o}BP2Ckoi}' );
define( 'NONCE_SALT',       '88kq/;^M@G#]3+-d@S#!&u,mO Q$nL1*#},n{nzN?{1;nk[i6L/{{S 7ZBU>9&XP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
