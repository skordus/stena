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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stena-default' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Yp,+u.!jnXOPY/nf#&IZe,e.<E]j0~vb@ib/9fJ@r@YFIjw7gsgFv]]CL?WoPkho' );
define( 'SECURE_AUTH_KEY',   'E,D5/*&WVTa3t|t6ty?{q-aBADEe+-j3)EI}=x<_QbEr5`]n~N({5B1DK[3P?S(e' );
define( 'LOGGED_IN_KEY',     'su`f@!kl(3dbD9%1fIjg!u)`lxi4RrRlZr<IB_g8UD%0Bw*0JqE55K3Sy0x{1+$ ' );
define( 'NONCE_KEY',         '|#3n~s4^^.nLGT}F&XeiVkCaGwgI{<KOkmCT}ww%T@#9 1&}>LILnjUa4nLU,H/=' );
define( 'AUTH_SALT',         'Kv.cB{wuMs-0a}8{,YQa#6g~U)If`R&[.Wx3T&9r #1f!)0{8i#bQUz1S3~3isBI' );
define( 'SECURE_AUTH_SALT',  'v4OYkne[.DL)?;&AOf$g~+NCE&nuu/N`&W4CcY,;dG* ]@Y)|D S;.,#<Mdldkw$' );
define( 'LOGGED_IN_SALT',    '3.svGV4X]Zwt*#]^!83+Ec_RaBdw&eMAB9,##-n2!nRhv#DYD(=(6]js{%s%xwiX' );
define( 'NONCE_SALT',        'D</a/34i:)P[]xqx6#6NsFW=Uz8xy?Yi,t7,:;_.bPI`(Pe9.6RaG</R~xf(8ZYh' );
define( 'WP_CACHE_KEY_SALT', '+1wnjq_tw4B310JX,/9GS%{JW$!YY]si-|6k82>*M[dRM+-we&3i(fx8(P#igx%Y' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
