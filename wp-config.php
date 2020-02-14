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
define( 'DB_NAME', 'opti_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1Bci@/q3&<T&)IX!!UM:5K4DD<^y-LYX]&Yeb-2;wwF> Z4fol;S5nyv^gcRs?m8' );
define( 'SECURE_AUTH_KEY',  '%]QLc/3uE)o>I|7~HaNBhB5NB`@pWo;_M;&PH89!s2RBM_ai,{^SR-fX6A1=cm28' );
define( 'LOGGED_IN_KEY',    ' nkYG* 2+oREP%W>5btDD&SRc=W7H495<g&Z2p1f<VIUE;k8J1l:x>#bXTR[DCzi' );
define( 'NONCE_KEY',        'uozB=[)$~T{Wp8? E-#sL<L_b6`9O(r<|~S `cfT`w7f+XuBR6%/wpP1F~:O0BF1' );
define( 'AUTH_SALT',        '6;SUaq,L?SHT,=KguB8@t~ZI7bZPek/)00aq)]}(bTW$hAd0+|4*#nCLqINFpU:g' );
define( 'SECURE_AUTH_SALT', 'sej0j|gqB>{y]lvVca 6(6l;9J+*UZlZYu}DM!}QKubQ&oi3~Cn{N=R.DgI6i`1x' );
define( 'LOGGED_IN_SALT',   '(Ql|^0%^0t;-D6Sx0?pj 4x<fEUr6]dNDkcq`&tmF.ONc*Y,43Sev,$gAza ,=CT' );
define( 'NONCE_SALT',       'Eqr-7/<cnUjtl6Y, l8pC;`zF~9v{OfUIn6q4rcL&(Sp}Z)-C/S/ca+Sg94b>bHh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
