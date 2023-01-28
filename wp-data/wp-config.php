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
define( 'DB_NAME', 'mariadb' );
/** Database username */
define( 'DB_USER', 'orbiay' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '8[IT?>{!<{CbuSs 4r-H8m54u^]^,H25qK%E{wr|%sh|d0*6dluy-7YnKD0f*[C^');
define('SECURE_AUTH_KEY',  'gqEPx!h$WY+G-Fqm?%h!bP~0#%=$jKb>vh[[rD$W3_q{BX|sh.-rzvJ>9<q.^uk5');
define('LOGGED_IN_KEY',    'VVyo+|R8!}u{xQcVa@E$+%=.(M/I4M*>x&=Q-@3@l$iozq+;B|u8(l>Q97aJ|X|f');
define('NONCE_KEY',        'jFRW$1E-t^dSnv_I& [y]xb(87;|n+5:NU^&o8-1O2 rrUDXC|a_{*hwj*I&$&Ks');
define('AUTH_SALT',        'Jq;(nlJs6k%`jfX7#l&wj+y6jHFoVZ$&Nm*&7J,)v@cw-t*I!`!cYV=y7)gY#I*f');
define('SECURE_AUTH_SALT', 'mT;0L@eIluS<l^7ACu.5<+7bUC(=UPg1q6laTc+m^]~U`Ktb@UU^E5Dm,H_{1/P4');
define('LOGGED_IN_SALT',   'ICs.Gr$N?i@ e2^_[|^ld7S5qr9+,OK=sTgrYTy?i~Yah*LqR@(|ehZWh((WG`8c');
define('NONCE_SALT',       'P~!Gl-KGY!kh=nvRsaU|#j%2p|(~2#Ec`T4ib. 8{TKayB0gK1+I(;iR*+nAQ+~B');

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