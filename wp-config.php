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
define('DB_NAME', 'bgcdieppe');

/** MySQL database username */
define('DB_USER', 'bgcadmin');

/** MySQL database password */
define('DB_PASSWORD', 'bgcadminrileigh');

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
define('AUTH_KEY',         'ATv(YH:L{[+8 Xt@Y~zxcYEJfO&1-P<-]8ETE59jNs=@{+u_lBgBH^E6TLK5mz7u');
define('SECURE_AUTH_KEY',  '/m}K%[o9B1ISyqqT-5_,j>H.<Y0m`.Vd^1t)~,UB3u+&Uk[1zhQs!lh^&>EBJOu,');
define('LOGGED_IN_KEY',    'IW;L(s(Gd-$ )HW]<78;3WeC>=4%!L$JNzGR{t!QdD[&*~I,W&^v-@r`m9kll9NM');
define('NONCE_KEY',        '~h4 dpa@_@7sEqfe0 *l;|1h%NC^g[TjHl5C{X)9^K3J_c`|XuM7[R|i+]x<VZFz');
define('AUTH_SALT',        '#=}%^HFcss$>l,@<8amPw%eI,kw=g3dx{x^T~9#F2!K=oTX|RsCzaFqHK:W_BrKM');
define('SECURE_AUTH_SALT', 'm<K_)`J07kZL/pY)GM:2x> Q^</c@pWN1z4T?y#idO4{h;M|@2>5V4KU2mkz3rE+');
define('LOGGED_IN_SALT',   'Z%viYnq|zE/BTZZbzrBwn<_FV;.2A9xq4%Mk@fC/=M05>N)olXmuGEY8.nEb-e@v');
define('NONCE_SALT',       'r#gI!w{4s``G}SXe+&`*XC~9St0zlQ/iGDD ,1UPL=#J8.AvWfsTJ.QO(!!%f|Q(');

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
