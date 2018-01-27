<?php
/**
 * The base configuration for WordPress
 */

/** The name of the database for WordPress */
define('DB_NAME', 'streaming');

/** MySQL database username */
define('DB_USER', 'streaminguser');

/** MySQL database password */
define('DB_PASSWORD', '@Pp#1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 */
define('AUTH_KEY',         'CN^=X}Gw6FDrCofnMMy{86DLOp!*=1daQ!kO.%!;,I}3qNKRF^kU(._:-GOF+&Jz');
define('SECURE_AUTH_KEY',  'wn#=F%7&Dl~Bd1wZ,0pWrszv?<3?pirI9<p8KSGU_XrM4>bFtw@/y@w,h4nJ>ufU');
define('LOGGED_IN_KEY',    '[Bd-)x8xRMt &SlQ9#bmj1$K+7e>R>5G*49Er.?Xt.vgixn2%<&L{0XuZf~]XWlp');
define('NONCE_KEY',        ' Fi8atM:j(U%/D0ThIl+_Fk) X{YRNvi?]pH?*fy/aaa2il CMH[XDX) i,:v&~_');
define('AUTH_SALT',        '8~r%&</GHbbk{ZX^EPe(6_?m^7K6>#tY>SnGD%PzCXo*{%K8mbg6:$0^~)VUF=~[');
define('SECURE_AUTH_SALT', 'S&U{8EA3UM7o/D%89b~N*|:K[rjD(e%[NBtdihIh)]5OGXwd!i5%T=ZaP3IAQr!w');
define('LOGGED_IN_SALT',   '(&)jTu)hLFZK{#5(%T4|uB]/Oz8@ZKg~&[=lB=xjv=@~>}d!MO-%VyIr|j)Fh|gJ');
define('NONCE_SALT',       'FMG>OhGH+_;:%Ljc:/;.5xPM~4AS+ULZjr=$@(19OBO7ha!/&mHuP:UcG>.syX|@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 */
$table_prefix  = 'st_';

/**
 * For developers: WordPress debugging mode.
 */
define('WP_DEBUG', false);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/cms/');

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

define('DISALLOW_FILE_EDIT',true);
define('AUTOMATIC_UPDATER_DISABLED',true);
define('DISALLOW_FILE_MODS', true);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

