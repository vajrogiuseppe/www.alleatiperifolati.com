<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Sql1744965_1' );

/** Database username */
define( 'DB_USER', 'Sql1744965' );

/** Database password */
define( 'DB_PASSWORD', 'Galaxy!2025' );

/** Database hostname */
define( 'DB_HOST', '31.11.39.133' );

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
define( 'AUTH_KEY',         '1foh29rxymhydzfzjvreuadijqs9zfq8uqmewolb3wbhivmpuykriqqkkurdlolf' );
define( 'SECURE_AUTH_KEY',  'lhvnodnruqnrtpwtmdelpgreqgnvli6uuvqjfncxfqdhwhhf7fvponqlhh1lputh' );
define( 'LOGGED_IN_KEY',    'xw0zrfc6npofbcv0esvb453vdqsoipuh8yccz3hxvgay2lwseqthyjlmlhgwnwgl' );
define( 'NONCE_KEY',        'x7eswsouuj8yii2knrbg8tbnw4tf4swmp33wilp8dkivgvcx6z73rheyfky6c7ta' );
define( 'AUTH_SALT',        'pjbj32cekjwn6awwzwpe6try7ztfufi2jdzzinn7udeiwhczy7hzmswhe1b6iv5z' );
define( 'SECURE_AUTH_SALT', 'n0tntkcwek2ybt3db5u1nimh8gw2pbrsilveowpcdkq7znqpljgzddmiqsbkegdn' );
define( 'LOGGED_IN_SALT',   'vaaohmczbblzcjumakjuyoykwnllpj8zchq6owrcqdo3y3a0lxl7epyinxvvka6q' );
define( 'NONCE_SALT',       'aax6fcmyth6copzd4tezlih3arjkgmix8who4vnnihfr4ivawh3nrbor5acjonyc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgv_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
