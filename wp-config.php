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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_007214GreenfieldsPenrith_db' );

/** Database username */
define( 'DB_USER', 'wp_007214GreenfieldsPenrith_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_007214GreenfieldsPenrith_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'vm&F:AY52k+^P1F]_/&TT7;<:tR,G5HK.<0>g|E|;0(5JU%Xl.+kN@f|<8|2/g%@' );
define( 'SECURE_AUTH_KEY',   'F405|-xTwP%X*8&P-D#ha~LpM/,cMSfR%Gn236P**r 8u1/m*zws}_^<-|;bGi8^' );
define( 'LOGGED_IN_KEY',     'YfA^B4|H)gn^J~paAeDL=ziBE(hGV!FfVul)MoU1v!C#<+&N8iK_cubs.HPN7pfJ' );
define( 'NONCE_KEY',         'ccT?MWc`.Kk42uE`iI@(`6RJ4K*.B^[v3j~I9<LSu8=wgfP~Nt(&fL+kRVi$z8yA' );
define( 'AUTH_SALT',         'uAs6%x?3p[#aF/&Yc!#q4F +.t}ow^reRai$4dF]-yN8Pl6po38~Xi X5.2U!gbF' );
define( 'SECURE_AUTH_SALT',  '&J-a>&g5*`&vVh~oN_JVb(7E;F]xsvnNzYWazAvg$tZ.d[--eB-buyLTf2<e`# 9' );
define( 'LOGGED_IN_SALT',    '6~YfYv`Ms;m?#g@bfYIZ8/XM[Hmp6L)(uxxOSl)3~&FK0(KPOVQ/)m[nNIgaAv5t' );
define( 'NONCE_SALT',        'ygn):j5aWFlRcVv#5~L>kiuekjemZsCDN./;9$hbaQzBY>r[.{{gM/|kft{k+NR-' );
define( 'WP_CACHE_KEY_SALT', 'MK1pCy@X|T+E@Sc&|@,{))|DmdQChs1b[/IPt>}LM+mwAlF}wZjH{mvcG;3`TiHC' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	//define( 'WP_DEBUG', false );
    define('WP_DEBUG', true);
    define('WP_DEBUG_LOG', true);
}

define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
