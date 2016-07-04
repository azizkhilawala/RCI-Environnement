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
define('DB_NAME', 'aziz');

/** MySQL database username */
define('DB_USER', 'aziz');

/** MySQL database password */
define('DB_PASSWORD', 'aziz');

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
define('AUTH_KEY',         'Ws:|,~w{q9.-r7]kKPt{EX#qmq%ro{T|E(>Jj*ERp.L-)$]Vf/#;z{*c6MHq_/m0');
define('SECURE_AUTH_KEY',  'E5|FbhwxaDL[}*Oa18s6u}U_TM(U-](5#&8hQL.q&B0+(58@a2;r^lq}Fh,on~p&');
define('LOGGED_IN_KEY',    'HW,8{&{.A,5T!K18(/{$?3!_K~g2M.,qE+,-bh#3Sq*@[k&A>$PqN?CVW&Khg-@g');
define('NONCE_KEY',        'XxC9 YAuJb6S];#oltOinw5h w6`z1fmMM_3*8~{H14cUEUkIro11aPz6`}T!x2|');
define('AUTH_SALT',        ']4I>VVvv8/Y*bCi=-lh?@bscj7B8YofB&$0Eir~$K{2GA)2I5i;mfsT7UV3!A?P~');
define('SECURE_AUTH_SALT', '|bPJEpl, !_[Y-G$]cFA~6aygRX<+&_x5r4BaURHHn_k<i<e-A+<o I7/Uo,))MI');
define('LOGGED_IN_SALT',   'bQVq16+,K}ycYpHrujZZk-j%%X7 fq@PV%RncIs9h`*I_Rn4F8~+q{3`|M(KX/oW');
define('NONCE_SALT',       'oKBeehqJk/ZeM6vpi8!,N2m,m_Eh]ph[PWqwMshI~3`S]&u {.h_JhnCLNKT}G#!');

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
