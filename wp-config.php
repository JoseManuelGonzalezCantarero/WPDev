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
define('DB_NAME', 'wordpressdev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'manumanu');

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
define('AUTH_KEY',         'A/!{fIuj2`#)Ql`(y*2omPXmNc0@uVjH.&v))%6bh5h@rvvU!O`C%,Q8optZC2];');
define('SECURE_AUTH_KEY',  ';|aV~d]F k9%8pRM>S-nbt6VOkMrJHNE``a(5+w.]%x:Ejjh5Un>ayF-(du?:=ju');
define('LOGGED_IN_KEY',    'WAnNw4gu-b+!itHfnB2M<nk3nf9.SZz%UG zz7NeR97_yk?EB?i97Fb/cK1[8aTJ');
define('NONCE_KEY',        'xcTzK*}k!h&a.f.;pK;Hu4[TdR/i;?#-!VdX>}M.+-k gS1HcwB@V[L9~Uq~y19@');
define('AUTH_SALT',        'D,Q:hU;^Y|qo>xTS9{):4+}[Z(}_5cCw `|U/}zj0VR5NcmVv+@k2v;)y~`;OiU.');
define('SECURE_AUTH_SALT', 'Y#HR:k0B$F%dryTur{Mb4f 9)un0-5d^75=YqVIe7SHhmW4};R<cHf:7:_cavm=J');
define('LOGGED_IN_SALT',   '8uNEXJi,/R(<q5%|n>KW.3?USWMHWdOMeb$jPF)fM)Jqm1?w*Sd{bZ%mZ&*[8CsA');
define('NONCE_SALT',       '&@l{FNM2Dh6bl7zwgD62Y?D:_OUhnG0UgH^#uJuAH(>>]$1E14C9E_*va&qk5q,k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdev_';

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

