<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gmt' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?<a.pEutPN]PP]=#N:|rY(*c;1E,8fY:l+](k7ift/.TTG%?b64[ofkG9.un/E`r' );
define( 'SECURE_AUTH_KEY',  '[@mN_(eicY3HYanMA7X:LiBifDf@T~=c/WupbNv)vzf[G`P(f?*#%ty=}-ET9ONc' );
define( 'LOGGED_IN_KEY',    'VekNH6G`&`!(wfNtacxsYki(;5U,u&D~1A$T6*XNH0!42`gAl6^wx|}S+CcvWyup' );
define( 'NONCE_KEY',        'AWHF^1jp=wncP:cCH<%YW%v&%ptsXZD<!i!.^`zf9}eYv&ZN8v<#!y`YzMv&Nh?f' );
define( 'AUTH_SALT',        '(z*n$.B4SNE^GZ,}nAy$j~/;pM@KwhUobdzyeZ(/ur`Ov(5YNnkM1q|7YBp ;8$(' );
define( 'SECURE_AUTH_SALT', 'cm5r >J0!n*``[LT2G#gEmX-ZPR6-GW>WAjm;0a-Zk*DQNUxi?(PS:L _?~Omnl9' );
define( 'LOGGED_IN_SALT',   'jv2E6iDc&+OP[I3sF}I0F*lJw<j^.hwG<MyJs&;%nP{I4580s}[~![~xV6g0>@$e' );
define( 'NONCE_SALT',       '81sjTIp@Y-|.U|^V#KuM=(_h#(-av8,a#|m!0`hedw#VV>%g6b 4>A&7b;|5p<+g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';