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
define('DB_NAME', 'testwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '[Vx<MmEM}+cz*uLO0:|22b6kt-zfACiw&v>)^qEQci|_,U]$|+sghkYDSQ[}aaC^');
define('SECURE_AUTH_KEY',  '97k*X/+*wUko?9tKJIOI_ln,G{Nme|uu _D[{`:Z:C^?Pq?.p>xCoush+BQp/7wN');
define('LOGGED_IN_KEY',    '6YskP5E+Iyxz(]TW>WF#u$P#i8do{6}>^#Ve,5FSMoW&xb6[1Dnlz8UtM1`YI/kz');
define('NONCE_KEY',        'ruCf+3SF6$D-KN;6k4wNx-q*vFDE`P3ekBS6`/?1*S2PD}wDxqA}Vc;X*-W6ugv.');
define('AUTH_SALT',        'QDSmH/8=>(4VeY]=a119u3N/u2D3D[GBD(?pcP)uvCCpA2`TlTXI1n+&FKJ8Nr,r');
define('SECURE_AUTH_SALT', 'ZhvJPXNA,i#9~jqes;^3rqVC8db6>|(y^*}K&r&D-$})mas/i9a2R0@2jCbHE6S-');
define('LOGGED_IN_SALT',   '?SGmMZT=]ZBU{2jvNT/K,> >oC:AAR7L?hja<aRq(3&z}6c6<.e)6V~ R^D-;a4 ');
define('NONCE_SALT',       '5Ly9c2 ;,1+S:zfT>waNLc8[F8b^>IM;Cr}W:0,FGh2`mp.bGcb#XI4}!82>}FXl');

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
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
