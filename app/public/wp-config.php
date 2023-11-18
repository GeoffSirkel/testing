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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'I.Es4`nW?2$]G;jOQzl;C]xI;$KiS9:?hn+?prlrHiE8?qNT6c6a[_-ey8/94uw1' );
define( 'SECURE_AUTH_KEY',   'cYCC1E:2FOR]l<mLM9gFmFly VoEe8,r5MqpB=$4pg0Hjx>mj-~I*8$Q&ba2M4u/' );
define( 'LOGGED_IN_KEY',     'pbN ^fQb}ei+#L+Os?~a<wTRzsA},DE,fQ[fW-h$[]lAgVxBe&O_5ux[KETz^uw`' );
define( 'NONCE_KEY',         ',a Kx4.,Y3cGpfjJ>Lkj`{l!=Zf45Q&I&7A+ ,*Y:68xL6n6;nC.Q!8szJ9^.)wN' );
define( 'AUTH_SALT',         'Ndb=[KS-dP_Jj:C,EE(}=_q>Yh7![Wm8AYg/T$m jVnTn?7{_DTrw=zX}k,zYO|&' );
define( 'SECURE_AUTH_SALT',  'kP>ibNf[RI]`^r%r=}gHye@bgD:=PB.8%R,yU:p*9,] psLkP96|V%(P2EiBKD5d' );
define( 'LOGGED_IN_SALT',    'j`U]7`nb/2u@SxavNeA)W:Y>EVD Yo{Y{z?otX/_LyK:F?ac-PP8Re),*W3HfOE4' );
define( 'NONCE_SALT',        'c~o(ep5)VrpB5jmCV^mY;)_gh& +E7oyT kv{EfQ`8HPU%]S$X5>B-Q#N37E1+r$' );
define( 'WP_CACHE_KEY_SALT', ',m}V*&^%DmN^7yFUP0)V)edswIxtrqB-SoRj*]Q=E}jCi!pMM#-@J efEl|D5=4M' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
