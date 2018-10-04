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
define('DB_NAME', 'trabajo_15');

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
define('AUTH_KEY',         '6 y_y VXeFgE& :Ri~& <U;K5E7$_1@6Ke{q4W$d`u%i$KI!2lT?M_[A<^4e=UE)');
define('SECURE_AUTH_KEY',  '#E{aS`ju_3$V#`av9 NUva+jQz!up7:J|0kQUknhLH`LX^xU(ko]#;!KQKe+{|=z');
define('LOGGED_IN_KEY',    '4PnIShhaM7MC(3aC}o}n|57,(vq7Hvr6}R4n?6#F`i%dN.AOq!GakFQUMZ;{Z8fK');
define('NONCE_KEY',        ';~7SqT0fECO75!D*|!Teb 2rufR)#WbOFEoUzW2E,G4s$HL$VVG38%Uf(}|jw-u|');
define('AUTH_SALT',        'T*8csE(EE@Z3&Jdh9~zfBvNpB#V4K,*#C`jfUUp<k|NmhNYR>2han| 8cchbS0ek');
define('SECURE_AUTH_SALT', 'f*OSe|hz~EB(CT?KwA{g1>R-Kync@c<W3}VM(*8~d/}ycC?g^8S%+~5t-@}yn%~I');
define('LOGGED_IN_SALT',   'miG0p)CE<tihvrlF.eK*?eSp[VV3UL)*xl<lFTxEtEvc:)!0qH-0/  ajC8l1(&F');
define('NONCE_SALT',       'X=AyZV<a<ZW0q`/xZvkG64B~yH[,I/rb@K8 jgK*czuU>N6Ugm&M/b`L<@/im))L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
