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
define( 'DB_NAME', 'Digitup' );

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
define( 'AUTH_KEY',         'AJF=D?F/uhEDRn>rO4wIq9$?YJ&bG[6o1~M^]k]t%>qu3O(+G4W^^E6lU%RzwK{=' );
define( 'SECURE_AUTH_KEY',  'J,JW1!,Ov:c&dVL9GIcP{_%&23(U&drckw{dt>E!>Jt`DNb{a>t8WtGcTT{&&`eh' );
define( 'LOGGED_IN_KEY',    ' -ZUMXo)LBe`^-.7NeX$C#>.0cZalIHx!>WZiyVLrI#0QKJtJQ(1tJ`I_3KO#{2Y' );
define( 'NONCE_KEY',        'K[x4d0zmP*#mWNkm|3o&S@Pr4+<525S+PQV0Vj8ZJ,92F<<,s;yVmZRNSR~u}4r&' );
define( 'AUTH_SALT',        '?fgLGb>$lx{jX< |KM6+FmiRd1<5A/?3koIc5.)l6^}36 nia.~[`[<,H:Lp)0Db' );
define( 'SECURE_AUTH_SALT', 'sJNeMl8o;Kve;HDA;EU<gZBvn@9O*:.E>`J~L:4V6@o[,rWP966km{Ce~;CfJ++J' );
define( 'LOGGED_IN_SALT',   'R&pQ]7mS&SbQ/Y;3--+-b}`15z^%iJdVKS;8,:1d0z`)SVhnQuAT8Y t]9d+9k.!' );
define( 'NONCE_SALT',       'aA_y~T%Rj}{bRx0x/eN-%lYB?Ib<XamAi*&W#,7>h?y-i0kSY|VX*Er9BjKZ:e5w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
