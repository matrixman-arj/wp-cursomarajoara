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
define( 'DB_NAME', 'cursomarajoara' );

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
define( 'AUTH_KEY',         ':RF4jR$3a.*yvZoGpDeZ?SKj.]!IK*WwQ.hkI4J__K1-7NP<KV{(|8lhW{Vb.PeG' );
define( 'SECURE_AUTH_KEY',  '4c2m 0Tf_J8:d<Fe0Ze_Z:eaPeq?tndJv%>F~SG9;66. ,Nw[/(o$dhmWTH]D5Bq' );
define( 'LOGGED_IN_KEY',    '8ZiH&&O yb>,U9Bs+B>aE29+AS=&bm,#ZHOL2cY+|yex;5O/=oV]ikX%+Pct`1@X' );
define( 'NONCE_KEY',        '0S9kP:Zzh;=5QMhv,8ea|=!Gr*}vp!c<6emlt;,W6;v:aoqK3;:zgPlPw9tmBVc,' );
define( 'AUTH_SALT',        'dbYb|$X*N{k$UdI]Q @C >wYhhlx`~*Q*]5l+}D^2ZF,1*pf.oRjw][-/2$q7~$v' );
define( 'SECURE_AUTH_SALT', 'wr[4Txml>`H9U8dj1:DCvw)%Wjg=!,%Zc=OtOt`ksdq;={* .mj}umc#f<S/mFGt' );
define( 'LOGGED_IN_SALT',   'ABjCx07TF62G#%K80q^FHBxhb;4!<jJr,Z-FXs2!Rk-n,1q~ORJ!Zsk[7[qc|f7J' );
define( 'NONCE_SALT',       '!z:/A9xC2S6tL5bYI8(D)|[Z!sY^V%xa^8T2/fK<._N64T}sR77@C@aWkxR L*5R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'apswp_';

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
