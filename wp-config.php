<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'obebryce');

/** MySQL database username */
define('DB_USER', 'obebryce');

/** MySQL database password */
define('DB_PASSWORD', 'jcaA3WHLjmCT6cz3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<}nBibm;>`_Xxs8at(*]`<O%^mjsBE*E /.7SAc<AY(_d$w/b&5n*6eHv)%^-D@D');
define('SECURE_AUTH_KEY',  'MqR!y.|u <k 6So@u_=WARq-G.VODiEG$FzR*BtP+]&TY-B~Yj*LqfM{+;?4_WEI');
define('LOGGED_IN_KEY',    'ES( KXIXoDsB3 m27fpAz~zd}|P~S<FEY@V--([d C:VoIR$W<^%*4yAk>#YS4Wz');
define('NONCE_KEY',        '-`9P4u*5SU6RM&a%c=)gvm)F$*:-vNw$5(^x;od0dKKeY{uuaQ#&{^nT^-7>*)Eo');
define('AUTH_SALT',        '167)[D?Mc3>?[<;(-Z,r-2T[]}lBlIlF}&3:P+&^<tpFg-mUXC_gSY/W+StOWW=i');
define('SECURE_AUTH_SALT', 'TIu*p<zzx(3Y^Y||]WRo_~}uE<EMlW7qJt><hTQ}4+{G`oDp%AB/;,9-6dpFc&fG');
define('LOGGED_IN_SALT',   'u0!|!B_W@fEYT1]SC5+f}w]q1=o5!%/1=Ig=@ZJy*.3sJG|t2R!g/e#CoW{[ J[Y');
define('NONCE_SALT',       '@7J#)_<-g|d8_{{oU)*}nJqTR2mSw,73P#F+0WtkNC7NW&4Sq!AI7jNa_j*$k5Bk');

/**#@-*/


$obebryce_ip = '73.128.89.247:8888';
if( $_SERVER['HTTP_HOST']==$obebryce_ip ){
    define('WP_HOME','http://'.$obebryce_ip.'/obebryce.com/public_html');
    define('WP_SITEURL','http://'.$obebryce_ip.'/obebryce.com/public_html');
} else if ( $_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1') {
    define('WP_HOME','http://localhost:8888/obebryce.com/public_html');
    define('WP_SITEURL','http://localhost:8888/obebryce.com/public_html');
}



/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'obe_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */

define('FS_METHOD', 'direct');
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
