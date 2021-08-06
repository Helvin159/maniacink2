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
if($_SERVER['SERVER_NAME'] === 'maniacink.local'){

	define( 'DB_NAME', 'local' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'root' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
} else{

	define( 'DB_NAME', 'kmmkcamy_beeyouink' );

	/** MySQL database username */
	define( 'DB_USER', 'kmmkcamy_mrrymer' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'Dora0411!?!' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
}

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aXB/E54VE40V1lgdJa9gOatWfdf9IoBy1TxQoLvu0XLEqyMTpp38Id3fwQErvB5YfiA3yDDOp4iotuJj04jLlA==');
define('SECURE_AUTH_KEY',  'VtHXrfu6zWZ0NACFcXgfKGTMG198Us9a+ZMHiyZqYK8wHMo3IlIS8N71S6i626b3ScGAJj/uCyPaxFjhLe/ZBg==');
define('LOGGED_IN_KEY',    'ZBQVoL9roTugOWXiV/mMts/jjBfI/z6iqxci2r406YLhK3m2uhSzbajJX5eNeu6pRVIDbErOM/kJpkGIgHtOnw==');
define('NONCE_KEY',        'bl85SBfyZKpn44Gq5+OncCFF1Rju/0ccihIk1LiF2Sbhb4Vw8Kg69pD/M841xiH5v2EM9lp5FFoxiWcyc+cD6A==');
define('AUTH_SALT',        'KkwUWfI+z5w0fn/ZxNNhS3tB31TW6/jGbuNTkqfUVpnlY1wyyWpyhRUpL67wG0FS3H4ksfU5o6TDZaAoqzA+Jw==');
define('SECURE_AUTH_SALT', 'JhV8fuo81OKcjZRiicR38c+O/YH0dZr03svJRwWZBorPQO2nivt73tiPMw7NG7QCAcXTrM+cZtgNr/3k+zgyvw==');
define('LOGGED_IN_SALT',   'MLv4Xo3oOW9SKaXK9f2KVvPbtp6gN6Cu9JYjSbGXnaW0PFLvvcjzWLdXiUYlN3e/gp2RjuROLB6vW4IZlKhEZA==');
define('NONCE_SALT',       'I5t5q89k3GOu3bM8GMyhFm23RfjtC45SL1HkjE7aBXBbubyPEl5ctN3rjzI6PKxA45U0igww94Aa+wHU5saCag==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
