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
define('DB_NAME', 'baymaxbhai');

/** MySQL database username */
define('DB_USER', 'baymax');

/** MySQL database password */
define('DB_PASSWORD', 'sunny83??');

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
define('AUTH_KEY',         's`Ltz 0WO=4DwP$iQ0Xf.l?xEM pTo<l#_(i}|oGR2s41My_GeCO72m8NuJo_@[K');
define('SECURE_AUTH_KEY',  'o~(r[[#3G.c4uAv$~i@x*oOaUiJh#B<&stTrPDKMvUjQ&aSb2S%G2[j2tdi*8= y');
define('LOGGED_IN_KEY',    ')t[5-wYOy`Is<Of_WwsK58+c!C_Z/yh3|@E)*Q+}Yy<3j:(zXw0qru@7yMvf qPN');
define('NONCE_KEY',        '6X:kRG[_0%_yYc0O~-G-uO2G.[X1@*wYY6ffLTWVkjFz2AMC4|O2+c>Tr2WLdoHv');
define('AUTH_SALT',        'aL>qM>8A({|j!5T%zkg6]*Iw@?.bU-]pe`!^91q>&QhRMQu7et}|f4(raCX9`.4L');
define('SECURE_AUTH_SALT', 'Idyh+mr-_j2-95dj*3^ wQ&I]|H/iD `]1kThxLWiwKxtCnd5*#(Rd4PVf*Gow5}');
define('LOGGED_IN_SALT',   'Ap]/b1>]gk9zUx[<Qq07ZB(<n{pO2DpO;|R1}pU-iBIuJ[F&D0w1&B|0g34rnmb(');
define('NONCE_SALT',       'V$S/UfD+._v{w;s0ycd)0nF6dX~12Pk[Q.+hBS&gA[rIXrGl[&QR<h CSY9{^z]n');

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

