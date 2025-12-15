<?php
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':2Bb|lKsp@^t}mFoh]<]N9jYWak?A%k:vEQ!ZyOdnv#7m]Ax:`^l(lLeb;NM,2_v' );
define( 'SECURE_AUTH_KEY',  'lxxj)q))dw))UX0n9]AK7Vb.IBdh;MY-_,*f|@;{wSYJtoVUk(?GSVq9wDtvGNx7' );
define( 'LOGGED_IN_KEY',    'YF!_8V$/u+l4w{]s&2>*m]-@Qb#DHe-xN^TP$kzgGIe<Kax0S UmB/@qt$|:C{Mq' );
define( 'NONCE_KEY',        'Y7I:2l*XU)Kjp=O}b=hX2JsVter5:yms](Bgg5mAy hRH8n8-Q$Kw4{I5~Fu5hM7' );
define( 'AUTH_SALT',        '9szL,R5}*Blq9HD}9*_hl]Cv0d2TX4eP-2i,@CCY(OO+D1@t8y^T.-Y=,(d`x*8s' );
define( 'SECURE_AUTH_SALT', ';0Rtc% p?woS_K>oGD3xBC0BLx-d|/h6`^Pp>}gBDw#%I:Av$%/.$5Q{`*Q;*BBi' );
define( 'LOGGED_IN_SALT',   'W.C,k1nh$<(dbI~ERf?4q$9kN0!lrS=$xk1^ 3~)Q3WAR^f(Z!UAD52)4F)5m<@g' );
define( 'NONCE_SALT',       '-.7@b<2F&RQhq:p{x-)Jc|{~,Lo|S7jQmSVQpm2SpS9&y=KLfy0}{alnUHD/RC~s' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
