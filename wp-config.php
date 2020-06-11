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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pick' );

/** MySQL database username */
define( 'DB_USER', 'pick' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qZ|,@]pckw{LFIw%jPi4;k@%MuU*4SJW1p>BC18{`2gY3c`{ffh}O~ Z+4]*$m>^');
define('SECURE_AUTH_KEY',  '1|&E;fe  =gbGeGfY|aPalsu&R)vFZ`otZH:+NbtGG jDL_M-3Larf/uLaL~bwvG');
define('LOGGED_IN_KEY',    'gYGzg(-l|cS|GCnku 6A^)Z?c-q6p.w=yVvm?owpDK@7 !!m=M:b:>{~cw2JdL[n');
define('NONCE_KEY',        '=:=HlavM@i(~a6YyiiJ-g?q$qhO?o9#h+C+i.3fe#H<JS=] JZc$+-h`9l1?$;%|');
define('AUTH_SALT',        '$OHUnHz:o~02J| @~*r9HzW1G34x_VG!BCTb3mAcp+yg!X>Tx~mU W%=+%x|22e!');
define('SECURE_AUTH_SALT', 'rh:nU2xrWS=duq(.8%lxcUi4{KIjU4AF,,Ge!C[CH=;wm`(y,dq6joMbl-]`!~<6');
define('LOGGED_IN_SALT',   'B<U4P~DS1BKN>2z,]pFjCT5*l_ACoE-:^s|)f+;EK.2Ud [Ul(!0?p(,ZoX+Ct* ');
define('NONCE_SALT',       '%-n6}-7/hHTug]P~#n)u5S6)7[i$VQ~%IkX:Llt~FnY,FH)Td @Mp`fH<>=-}mX[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pick_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
