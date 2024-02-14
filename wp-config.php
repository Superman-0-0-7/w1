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
define( 'DB_NAME', 'w1_db' );

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
define( 'AUTH_KEY',         'q2rx+d%;Jia/-sg]*FreJ^j{&7m{MAv3~:^`)>/fD@H=Pu3Nv$/~Zzl>T=o8Pn4?' );
define( 'SECURE_AUTH_KEY',  '=M?_!,~xOd2kn[{0Xx&IOwg6_9EAR4jZW+USPs.82.{#{{ez3Rus^Ql7VQ--i!^c' );
define( 'LOGGED_IN_KEY',    '|ap@Ikz]JVja3$%,&2f[Ys/!Kz{e,5nzo$Z6$$y5nKjBK%Xt2fZZxY)R.;w|~BEW' );
define( 'NONCE_KEY',        'ED*++iAi0gMHQW7A8WO4x~qc=W_FeybL{ki[z`IucJv$1ImJ`P2M#}W8a5ZwDRZV' );
define( 'AUTH_SALT',        'opr!99eDtu=H2|<VU70x:CB-4G_pb}fuBn-hePi<5rOxc@`?HFU&2$aWT<(:)5b%' );
define( 'SECURE_AUTH_SALT', 'P^~c/b?=|{UHX}T=FtrPDEk,<#?y~97b4Gqy5{I87(5};4SL SBUL !n&wH(WA3{' );
define( 'LOGGED_IN_SALT',   '>/n3AB96|clZKl4R+MJ-#Hn~[tolT]!!GF?>U6hp/VS4U,zDITxm)E_En7^Q^[XS' );
define( 'NONCE_SALT',       's{YjrEi#5-v}  EvSbWvD #t^~Ep!.r9qgdF^K`lf&1{!$JJ5kzE~D=rq9#S.iVD' );

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
