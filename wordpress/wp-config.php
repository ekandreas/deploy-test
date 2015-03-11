<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '}`o=[ >$di:KPH]u`LEu)k^N@2!1Ee,!V6*8uKeP7bT!Ia&rPW}$&J/]Y6}EMVE:');
define('SECURE_AUTH_KEY',  '<|6fBJyzd|d1%8cayEgk#enA Jn<+AjQB/Hk`BelF:)A%^w5w5{?,!PA&I3f)bJ+');
define('LOGGED_IN_KEY',    'n (}U]qw3!viQprEG027!}JdM( Z:>R3+-|ncpqa>:x?3[9/.}AxLVCD]%y(,/,8');
define('NONCE_KEY',        'LCy*?d4i|W-{x[l{t rdDKA&(6E!<+}w6^*4B%t RX[i-Bnf:!_1rF4d50NN:9S.');
define('AUTH_SALT',        '~s0<foGe|jT+0]x}z=}+egB+`-aIV~|-i8}8[?.Plf@g+RuS$*NJG1s{zv5i?n(w');
define('SECURE_AUTH_SALT', '~+U!}=0Q)z**IY@K%GzKMdkUysmD@G)b0/AIG&|=5(C>sj.-j`J9Ov+P+aN71OO<');
define('LOGGED_IN_SALT',   'Nut(~Zh6wDS3RI4O5IM*%?|lfJull+~}:hR]Hm5nx/oM>^ 7H9O-A3U*QwhDb3*H');
define('NONCE_SALT',       '<C%>}=#q]VO_p@n&JY*:$jo9T+mSu+qc8;JOP9-riVOIn?dN&e,$@-$Yc-p0g}/z');


$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
