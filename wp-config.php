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
define('DB_NAME', 'alexhome');

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
define('AUTH_KEY',         '/C/tN[Bl$t@Q)OyZ4^z2I0ZJT4fCQO &@t)Z1_ip-=rOG+Ls*WhZcO1PqRr>6HQB');
define('SECURE_AUTH_KEY',  'YpL,sBoyC-)qjl6ORA?3oWkXjVtg!,Gh`;b]9R!JQa86UEj`<HBgLxuwyU})O~`3');
define('LOGGED_IN_KEY',    'qr|/Jik 0lZ%!aaG2&XadIzH@2~d{2R;pKEy4QIovu_HnZaCO@M9tYY`?#tm}~38');
define('NONCE_KEY',        '>HOQyj5*%NN[wfsI@Vx`>dg3*ce,bS<D<[]~t=PebNn,^>@s<fD?45hnfdVM;I<L');
define('AUTH_SALT',        'Rkaj5q`G<i}+`<Sny:}|$):pS=OQLFWm%_,Y1yEv=#)}#OA-a(^<VE40l7NRp3Gy');
define('SECURE_AUTH_SALT', 'N5+ZV.OJ3d&Q#w:T|]cNnxS>x9fJ!26T)|73kw_(0G`00DVZ]rTd+M|srV^4.5?m');
define('LOGGED_IN_SALT',   'kS.6=;L*jUC2-> n]O[Z!AxhR:EJt)zw.g7pia_h%8F0qz|#ZxTz)I,:o<(&uMq#');
define('NONCE_SALT',       'r.$w7FOjt%V/F9W3Fe1?gjSCsj!_kw/Htu=QxznsWVzRzs^oi@Cvpg%O4&>rbBn2');

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
