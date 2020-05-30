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
define( 'DB_NAME', 'art_store' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'S ~ziV5pCGMNA{xPelph%p}ULBBw3zeTVW!Tr}k.}2g}bR^>V?w@gk.!wPSzg[[I' );
define( 'SECURE_AUTH_KEY',  'Xdt;oq434=dt@gS@JUN:vN$$.fz5~QR`h1b#uLkElwE;-S!A9!<ncjskY1!F`>>i' );
define( 'LOGGED_IN_KEY',    'X$HKA:]td#n^{;,.PA`h4C8]ENGG/R4OtGD<rTL[-st1lSu+0bveX,38K|6Y4=o{' );
define( 'NONCE_KEY',        'qtijS6A76`7@cXENkL##:.?fC,>iQYkjK%&ZWWv3n$|@ ce:YxruLw74|Mg5g@w&' );
define( 'AUTH_SALT',        'c<q.Tc~5mtgDK6|}0 ieT@[%$ur)qt.2Tc45bP~jPkiowcA3Bf@Jgn)0#XjD0+uw' );
define( 'SECURE_AUTH_SALT', '~=rSv^+-%aJb^eU{`DbFs->Wl;3RsE/p59.P6|X|E8<Gb!YU%zed}|uo^Sw^Om?&' );
define( 'LOGGED_IN_SALT',   'bK^(;&Jmg5E]P*(Geq((J*~?;,nPE5y1Q$y?_dTbCCH@w0ZVv:[V(o0PlgcP<*h:' );
define( 'NONCE_SALT',       '6t&P~y6a/7A@MY|1%*@8yzzYx%|+[sG|A wRes=q r)T*{Gt^8Wvmk*5rNqVo0t@' );

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
