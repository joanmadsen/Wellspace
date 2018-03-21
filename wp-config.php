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
define('AUTH_KEY',         '8gS.gbC`:/FW;+Is_yz5_&eNh@aSqIYix-ODX$e*$lI%pNmLPGOx(*.2@M3b8Z?B');
define('SECURE_AUTH_KEY',  'n  NvoU1T,W#<#0OViNNqw63r_I9~GD#muiuySx6?=rELq%K_#=y6tD+o<3j2?r+');
define('LOGGED_IN_KEY',    'n_-t;dxg27?B;d=d%-nf8[IS}B$|dsQj%.%y}eKzFr~mlT_=gWV9120ha_bh0$/Q');
define('NONCE_KEY',        'BNl~{f0&O(EB+t_$k|}*7LdO/GmU}|]|J.3Z+z<UZvTC|t2v1)8Y!RY.&;4Es]f5');
define('AUTH_SALT',        'IZxR$>eqw|}0G}6;G${jC@y.r;%H{L9aw>M.9Q~M`I?qz]E,lIsCj89zTVc;bL^s');
define('SECURE_AUTH_SALT', 'W>u>+dbVS,XZ`?:GK7A)~~HaW)6@0I1!@u*#w~=3KI*!-(Y#~k@5_[r;EIBPmn1%');
define('LOGGED_IN_SALT',   '|s&Jpn%P(!Y;8z#.Uebc>)`*p%gwH!}PAJ%A<GaPU|:2{9T#]Fbpc55}Z2/Okr![');
define('NONCE_SALT',       ')WJ4iQp`fas[XoOsgYgP:KvkQHu,XDS$r}W.Vc735u+3=z-bnk/#8v6~WD=yw,vd');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
