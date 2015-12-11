<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'souzalima');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '/>[GT:2+cRaGm!xqDe+n%S=fvEzfrSu;:x`W?BSs|w+MBS<o`2oU{|93`9fCdwl.');
define('SECURE_AUTH_KEY',  'YD7LO;4vyI|z.:0jc!@S}!Ts_xX0gK8;B/|a_]}2SLf;u!*;#b!$7-||L4Vsb<K4');
define('LOGGED_IN_KEY',    'k^kx5pA#I@0NGeIF2bn}c^B4)-?z&@lVBQ5$csLTX/W#fS7V}BM|NfI9{O3k41-B');
define('NONCE_KEY',        'ps%gV{37H&>ybzW$!jNnUnCyV8e5cqP/$P[|>#8?Ew`tB*W.<qu]dM2<e-V&ZB-e');
define('AUTH_SALT',        'Qu:=lO+5!Tlq`ct+6,ju9_fr-4T|b/[gg$ : mJv7R,OK}7m7}bYxPrW*Y;H8~=<');
define('SECURE_AUTH_SALT', '`9Y~Ux/>/BqkA[KP,?(l3xV2bkdZ;!&G*,&+6D^R3z/6A8#qRewz?O2saKN6+Q82');
define('LOGGED_IN_SALT',   'Z~x|eU&c$^e7$s8DkCMYG-_dh+C)j&l<19]mGo/Jm#{-P])q0B%BRwNk<MNO.vVn');
define('NONCE_SALT',       '4(=%w$8TNP2S{f0u|(ybxDpc`d4|50Cm<zj&Pf+&AD<!CvUMnrKV${w)853,VY--');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
