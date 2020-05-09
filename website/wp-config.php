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

define( 'DB_NAME', "la_globale" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define('AUTH_KEY',         '{)BMpt6jjkv}@uY`94NP~(I=K9D<ZS_;zF~`4toNVIe6r?+Bn=]eLK_xl+8AHsl6');

define('SECURE_AUTH_KEY',  'O2IM#CDl2|8`m8Y[&}e+IL(<R^6 }-kH8|wjunx0^@pvx_8Hi#+SX`6vE$``C?2B');

define('LOGGED_IN_KEY',    'B}}d?u~q7q^>8eRlBR0`+7L$-6okTe=[03G=O8a6JyIEm.)(wi/7GazfgO8`RNR*');

define('NONCE_KEY',        'nR~Kx~od,_Y@Z)tIRCmn+k[)H)$gf c+J8&fz[m+DC9ipbAE>BJMiZ|*fOep*e_}');

define('AUTH_SALT',        '%TN-59| g3Sj{EwR`=S3/4Ko,rTe+nm]>~ZPtJ~TILdHhhc5X|mY+S9:-;;YgE P');

define('SECURE_AUTH_SALT', 'p-]OfEH}yRUK:d,U&!XYA:a-MUmpplSJ`Tv~+3jf#Uj44EGd,Gb),U aa^z]op:]');

define('LOGGED_IN_SALT',   'zgc1a|m(+N+U+8[v]BSVz&j1?CtOSWCA}rj[ZdI7sf%iA,EOp-KM{69*X]CKwCAx');

define('NONCE_SALT',       '):bluV]^DU.b|-le&68`H$b|-)9pD8iBdYH&#-(.F^O7r9B+@DM%I4M.IAZ|ea!C');


/**#@-*/


/**

 * WordPress Database Table prefix.

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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

