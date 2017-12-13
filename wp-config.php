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
define('DB_NAME', 'thstarter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'IG*c=U]<,/8[yDU{ngQ_NaqQwj=0w5bQ/Fq=r(ZIU{;.I&r!?/gln*+6O_*_O|x+');
define('SECURE_AUTH_KEY',  'gSIx!v5fm._k%Ej[-|q=)VLw-S[ts7f{i:Nu!xQw_v.-QZlMw)F3z/Zva!#VA6#b');
define('LOGGED_IN_KEY',    ')di3vPf?p$/gvU4&<b.`]!e)MaQV4I:I|I`Rc8r28}:uj?xwKxj--oqU:qRd_u,a');
define('NONCE_KEY',        '`*LDOt|FY)Pf51d/f Hqa;5TS5f7H{tNvTcS<f9M!hz-D=,Ng=r8sJa$h]FEf(%s');
define('AUTH_SALT',        'Ql/#K(:>%W2%ja0vg{%C3L%y*AhQ[S5{yN;pHcXE)YqYg8f..m+U}Br|zKX+tu<l');
define('SECURE_AUTH_SALT', '9)RE1g}M5(6Ycl%)/j1K5vxY/72 e&vm-K}6R~(pv%ZNzL:nABdj@lCi.N[R1)uE');
define('LOGGED_IN_SALT',   '@iIa4bf53;xRSo_swAw9OtQM7D,d]NB.^]rk.aAWo9==RhS99md(3_(ZVhX{cN_a');
define('NONCE_SALT',       'Sf=s*>{IcR%7U9xsBqom*30t6o448Z8)j-UI%.=|U~(U4Kze`rQSgZLd!qj 0j##');

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
