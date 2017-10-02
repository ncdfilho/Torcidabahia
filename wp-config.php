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
define('DB_NAME', 'zadmin_tbpontocom');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'je|RNzfG-@pcXzDU#TFhqFo*0)TyJg?tHK d>P^~I;{sCm3T/g,7~5At>und}B%$');
define('SECURE_AUTH_KEY',  '&s2#%y<+A1B2FiT;=~Lt4+D-5ew}`HWjl*=@NkT%tk]C+J9YHRQs//TA&_khWE[W');
define('LOGGED_IN_KEY',    '`9pOD3|/zC*|X0_eQik&wSDl|+9V` Au]3tEXC3rK4Cqax2:>kvSu25Axbo&g}Oi');
define('NONCE_KEY',        '^UbL;%nf1LCm07KJ>`~4b)j-|rSE|z3*skN-&QPNRL51S1JY+s?;K^NzoFZ+CO6r');
define('AUTH_SALT',        '8*N~NnPVkjlVsM5[Wq;J-Yw7Xzi)6H-ope,lf&6Jt3%KT:HBE9dQ-a?,b-.BeT3s');
define('SECURE_AUTH_SALT', 'dj7moY-a:u|?EW!,es@5Eg|}??OzZgL;F=w]_5;^Bkxf`m]^LQ*4|C_@FPpP,<rd');
define('LOGGED_IN_SALT',   ':Q{g|U<GL87?QI3B)uWyfY+mGjbqp.4Tmg6[gD$yoYy2`0zv}-&QK+3:dIk?7Dbf');
define('NONCE_SALT',       '5GRjb1UL*u}H&#8#eDp4|Dtga*u;Y3vjp$:cPSzkl5e!:Yj je>.(2roc?X<lw7B');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wordpress/');

//define('WP_SITEURL', 'http://' . $SERVER['HTTP_HOST'] . '/wordpress' );
//define('WP_HOME', 'http://' . $SERVER['HTTP_HOST']  . '/wordpress' );

define('WP_CONTENT_DIR',$_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL','/wp-content');

define('DISALLOW_FILE_EDIT',true);
define('AUTOMATIC_UPDATER_DISABLED',true);
define('DISALLOW_FILE_MODS', true);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
