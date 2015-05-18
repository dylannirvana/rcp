<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'rcp');

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
define('AUTH_KEY',         '7qi])7R)J,:tE~f|VS|r]RT( @#N)<Povy`h!XXKB/c0_!@;V_9#8NswDDi63Ov)');
define('SECURE_AUTH_KEY',  '.8eXTUN @7D+!>t<O5y)g+svoEL-cv=)i2U. NWMVle+0 CKbq7li-Tu:pu-oAAT');
define('LOGGED_IN_KEY',    'z_fmdk$&]L:V/|^*j1m7N`Oh5dHs>!qD7#6z55:tfV{dRJ*TF|0!:R2T|>wJV>F ');
define('NONCE_KEY',        'TpLe7qk|8Q7^7-o]<+-x K<<f0F~br6|jWLi-|(!x4_WH1|C7s8uQ#fnVvvh4EV1');
define('AUTH_SALT',        'GjVeTJ((p+V|-TtVpX6FInU|UDLc8cqiPdy5#n5-lgyfYJqryR_aHi0d?*7AMeo#');
define('SECURE_AUTH_SALT', 'qxOl#wA1HMG%;os-dzisd/})9q3ssq(<,m-jtqbe-iL--]6@Y<@62_qK@|XA%W__');
define('LOGGED_IN_SALT',   '>!+e:>P(:pn6E}[Hj!#!Sk+?Srx)8hd9<9Z42.!vr,4b&I(*&lG{%9cmbOU _-Ms');
define('NONCE_SALT',       '%I8$O |acy22)V-_?MA&*h<%$@..m7|,-.Oi~heijskHDa9y;,1|i+T2j+h-zxi`');

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
