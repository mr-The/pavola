<?php



// BEGIN iThemes Security - Не меняйте и не удаляйте эту строку

// iThemes Security Config Details: 2

define( 'DISALLOW_FILE_EDIT', true ); // Отключить редактор файлов - Безопасность > Настройки > Подстройки WordPress > Редактор файлов

// END iThemes Security - Не меняйте и не удаляйте эту строку



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

// define('DB_NAME', 'gb_gb_avs_eng');
define('DB_NAME', 'dyrnel77_gb_gb');

// g98899k9_mrthe  Bj6UglQ*

/** MySQL database username */

// define('DB_USER', 'root');
define('DB_USER', 'dyrnel77_gb_gb');



/** MySQL database password */

// define('DB_PASSWORD', '');
define('DB_PASSWORD', 'I668&&Dg');



/** MySQL hostname */

// define('DB_HOST', 'mysql100.1gb.ru');
// define('DB_HOST', 'localhost');
define('DB_HOST', 'dyrnel77.beget.tech');



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

define('AUTH_KEY',         'r=L1~X.E*Pl<}Lw_LtqE2Ki/z9J,lh:ADRE=9MT>MC1G[,/?Y5|*RX~k!r^s{wy6');

define('SECURE_AUTH_KEY',  'epeXQP4QlOn=fRhBBI=_4 dF5]Nb]zM;#e$A@5G)VaZYRlI0:LTs+{RURf5:kDzT');

define('LOGGED_IN_KEY',    'M7_c v^{G~Usdn;.<j&_~0t!zg9QV`&kp-6;p/+]D6YP)0J}K_ak5Q^|L7pjt!nJ');

define('NONCE_KEY',        '%V_}e@vU}S!.9nT;OU.>x,?-(@3*|wtc.~7Y>YV8em^ZM0E/H%>q^&vD-,sR7ctg');

define('AUTH_SALT',        'vJ8h0]k^;jr!4Zqj7Y.7$eP[EmcfJJR)j&@:qb4x}Y]*b<.?1}[t7f,%de40y;iA');

define('SECURE_AUTH_SALT', 'xw:$dC5@&Q3n*=R!EVEs_m,y(a/SGuVO6Ty5,7UZe~z#-R)M}WIV[U{]86Bvdint');

define('LOGGED_IN_SALT',   'PpA3nv.,h%QRwQmwRV{uzw0/Wx@.68EI39v=ckWL=8*eXX06oAovH]Lc0bORM,j`');

define('NONCE_SALT',       'w$kgl?75o##E8rxCl<}jh~fi*Ek?N{By3#83ftY a^!s61S!F3E0Kq;fCbvVS;j^');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'drsafgswp_';



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

