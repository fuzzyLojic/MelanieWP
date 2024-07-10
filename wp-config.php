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
define( 'DB_NAME', 'fuzzyloj_melanie' );

/** MySQL database username */
define( 'DB_USER', 'fuzzyloj_melanie' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Xd5wL17Pcxxwjha$' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'hp34U5v[RP4h4NxYu|21o]/Q)*ZwOy(J:jIB3X0x]0bx]&xpGny4H|!oD3EUTF5D');
define('SECURE_AUTH_KEY', 'x8Rp&F4f+F/Rn9)P!h%9y~AhHpff#U]85JCw4U66o5TtX#[V@iv6Xjjky)4xAOD)');
define('LOGGED_IN_KEY', '7XZ_7r%#lcQ|/~4-!lerbM377cP[kd7LN#JL8C+C43QT9:g#!N:U*4k7/X944~m0');
define('NONCE_KEY', 'a91BN4#Ir9%5(/_Yi8v%MuzT94;-t7+1tc~/~vK|c9~!T!ZTOh9DHZZG0~uw2Psf');
define('AUTH_SALT', '4Vy+2ybN#X[/j_K1Kf*B+4[743j(ug6!Hmt8g]H/7D!iEs*7KKUm/]MxY*:gH7m)');
define('SECURE_AUTH_SALT', '@41m#(pOf[H9&09wp+YbYDs:J#b(8o3L/4|Y!oQ[uJ:]j_b03Gru]p72lQ7[*g%x');
define('LOGGED_IN_SALT', '([@3:@s)w;h/1ND4X/84E06%c+1)ZTWFw_Ipis(6&v1751445Dse|*Y80K6[mM+4');
define('NONCE_SALT', 'e+8QKQJe16iUkN4k&0#!*p;*/_)5gT[jf~/J-S+cn8!!8l]Z~Gp5CzZ[-6f!8DLY');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'melanie';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
