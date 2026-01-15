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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\laragon\www\wordpress6.9\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wordpress6.9' );

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
define( 'AUTH_KEY',         'D6LMKhhH|b0nI&u+Sg+up[vr<$c$cr/THU02GG70^g P58L[ZiX-o+sTmNe8|ZRM' );
define( 'SECURE_AUTH_KEY',  '1nCfa7)NJEcRaTtfGz:%*H<1<QRg 9U]$lAH-ZG{+B^;Rieh`NO{@.hfqtP cZr{' );
define( 'LOGGED_IN_KEY',    'ylO~1o)vz:D]dEn(G-{4%[GnMaY9*(!{@k~-qUliY2OP-C,LZ>-YzT[`? hz4siC' );
define( 'NONCE_KEY',        '5 VDNfp5,:H@~ZaIae-s=zZw(HTOdEY7jIt=Fa7Sot`obdB]IJkWg*hXWJba2aM%' );
define( 'AUTH_SALT',        '@[>^n$qU~+fPPX`UBZS{f`rKlzhH;-(Kx7NC!aEEtxQ 2rv?C5DM`Jk?zOi(,E|7' );
define( 'SECURE_AUTH_SALT', '6DcH#OUavb<6>fHs+Aix/%Jez[xm:e42P85&4^pHJBoU1=MXjHQjcPw+J?&#jgVB' );
define( 'LOGGED_IN_SALT',   '<b%L(4kh2G, 1`{k)kGUg`)44<G~.(J<Dda|AwGsKfQ;@QYL<=W;+*/tAoz67*kz' );
define( 'NONCE_SALT',       '&zc6GE:-dS{t[o<57G~6+vmhdEu9EO7F#J}<5_Mh(Bmjapzkv$iWnZMfyy OJ|<Q' );

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
