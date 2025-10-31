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
define( 'DB_NAME', 'adabunique' );

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
define( 'AUTH_KEY',         ':xkXnHk(t(en.SwyR#doJ}s8}1a*6KA|c-*M(Ddr]{Yq3`2#`LKA:f7[zs_tpz1w' );
define( 'SECURE_AUTH_KEY',  '3j/Cs>HB%_<]!92EB,n/SA(<A-q~oP JEbmXvmbgs9d5uaF Cz-}*Np9WlOq->xW' );
define( 'LOGGED_IN_KEY',    ':1;K82yH!fBeZz~GTS)VWO(43dC<DXZU3G)M+{,Bkfvnc9{NQ$<E(-?r|4XTr^^:' );
define( 'NONCE_KEY',        'F(5E4!`C@ISID&f~9L5s>_VK)(=p`XE!9iQ!N Bw/?=MJ iD;6>YA{LjeObU2[k0' );
define( 'AUTH_SALT',        '-,;$eg2TlH$e5=;[meb_9#W|%T.KK1PjE03A3OA;.j8 <}-jj.W/@R)0lr.M@+!|' );
define( 'SECURE_AUTH_SALT', '!+[Nq.nk*]tp)dJtLJ9j*w8MVH)Syl!A6da,x&^>lNri*`Se2gJ<P^M==zr7k5M0' );
define( 'LOGGED_IN_SALT',   'PsG4RqMr)a#+gQ2y-&(RD *yt/(SJ%*Z`J~:9~Zr,C%src-^E(`*ms_0;.kzL_;W' );
define( 'NONCE_SALT',       't*V@4:!_f$[I?yN^uV#IqICbt:q^!M^A9<^qC{MW,K4vNu;6/7TL$-8YuM+IH:hG' );

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
