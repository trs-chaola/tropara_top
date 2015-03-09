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
define('DB_NAME', 'tropara');

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
define('AUTH_KEY',         '*e+8a++FD)w(i[&Z>^-W 7>wmpR>H8]%ph0q+Mm%64rqUc:EZO`hm_@#oaw=sjM$');
define('SECURE_AUTH_KEY',  'f_T|^*@ur^Kl%{A^<jh1z_`JH0MW9w%x6Qmpr$p3d2zqKFa3)q[`[A2ik/3Eq-v|');
define('LOGGED_IN_KEY',    'lAY7 Z.}5LHfMXf#~M=iR *+pcH(-$9HM^eMS}*-5|A_Ktgc-x~.?76x+u>X;$-)');
define('NONCE_KEY',        '$J.|PK!__6S2PjF[Ok6K7eipsfTXjEO1EpQg86?dH#j;Eq3*yj/w vu(_EEsnt`^');
define('AUTH_SALT',        '.Nx4N<0,.)&6F[[9l:D!}oL0:]RjHxW^)7q1|5S2#|G!c<@jmt/J~,y -;6l?Gu.');
define('SECURE_AUTH_SALT', '})nJVz}Fxx-3vx^D8nUlW?J?EF9cL|lk0sr/h*Ua+-[;W#!K-VR2sK`L+_ArZ4tE');
define('LOGGED_IN_SALT',   'J|O2+LYna K.XlAsRr=)bia=!ikO!.p?f>apV#Tv6aK=!MQ8*}I_2rLQP@2b+6a8');
define('NONCE_SALT',       't%3Dw.hyb>)>n(LvK>@Ag6C,3N)2b8K$qS25Q+-x&2|[>[4DAuJMljn]*nb71H=@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tb';

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
