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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'student');

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
define('AUTH_KEY',         'p=^E7]t?BP!VIle1ud_`@5hh~RC:<vA=Dq<pIk?[rc]U}[AGUF-(qZLZ+)5%M#`I');
define('SECURE_AUTH_KEY',  'Ujl&%n{lkuKK(#>}+P|eR9nl**+w]Zs]tcW}7r?#U= RDycc-PvI`7SSRmkr`~}s');
define('LOGGED_IN_KEY',    'PkH+IIXgUMeqZ|]KyoN+366%0[%HjiR6WfaowxA(7pdZW9O-E&1fN ;(@/<HF}1}');
define('NONCE_KEY',        '87 W`,[(r;;s1J(VwZdD(7DX=PjiLyd3Xt;$&s~aS[!K7A?gyug-/|h`5HP+dk/[');
define('AUTH_SALT',        '+vNaU4__v=S_|*L(!VS@|@*F%@Gib,&54kUZuE!xg|Or:]Y3^nnhtx9{4`RT5c?l');
define('SECURE_AUTH_SALT', '4V[p4g5p?8e&lijyM3`<v}-Y|)mx{s-txqh|KfZj|-Vg@~+T}wFfaej2|M^4r/FF');
define('LOGGED_IN_SALT',   'ZRA~IWW0dT|sx*H^biN[_[c-vPMN^Ffdf5W1JoVkvwcT *]tp#wh I82{IEeNat8');
define('NONCE_SALT',       'Iu6-)7z]w,q>6@?f|ty&*m=K+f-r.Z+V]t+8-)pYU4-~Wt}GC+A>V,LieM*M//^C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpphpkursus2016';

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

