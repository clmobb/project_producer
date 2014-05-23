<?php
/**
 * In dieser Datei werden die Grundeinstellungen f�r WordPress vorgenommen.
 *
 * Zu diesen Einstellungen geh�ren: MySQL-Zugangsdaten, Tabellenpr�fix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es auf der {@link http://codex.wordpress.org/Editing_wp-config.php
 * wp-config.php editieren} Seite im Codex. Die Informationen f�r die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgef�hrt, wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden m�chtest. */
define('DB_NAME', 'local_benaissa-website');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'root');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'root');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht ge�ndert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschl�ssel
 *
 * �ndere jeden KEY in eine beliebige, m�glichst einzigartige Phrase. 
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} kannst du dir alle KEYS generieren lassen.
 * Bitte trage f�r jeden KEY eine eigene Phrase ein. Du kannst die Schl�ssel jederzeit wieder �ndern, alle angemeldeten Benutzer m�ssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         'YJkq0myfS5P|wD5&g(i&6@&^*3.(W.|`e@+thYOu_%!)rn}H+h!lsP@E*.D=-+a-');
define('SECURE_AUTH_KEY',  'HRg,*Ua&B.8U{k~;$|82yVG<{n6*)*TYEq0TSfFr@v25d>egmbh>ebC[Jk{Hj3+&');
define('LOGGED_IN_KEY',    '3ij[{j-0fKP-+-6]P%MPJAF!u)VuP>WH?jvl~G[ X64Y%N`1,+)9Sitr~m<c0+4~');
define('NONCE_KEY',        '#!9!Z+kRu~+K-|1JN2F+QUnj8}LFR#2 w:pgVt|y~}(v$V hP%-HSI^[g<cTCoYU');
define('AUTH_SALT',        '33[_rv%M[ Pe}Lam8BM[dRHFA$4(lrBq*|0qdKkQdhyD6-a0Infsl][5aVMgz0O-');
define('SECURE_AUTH_SALT', 'o=+ykL,S_Y-4gG|kz&qlS!;O-0,:~HJ12Kuy|w|M]Y9c=ydNbjebF+yswb8GM+kf');
define('LOGGED_IN_SALT',   '(=csd#=hGuUE24yLY~o)vlb3Z+K5/Dl]`WR=SDUzy{Z?Y[<%Q}xAP=eZUG:rWbtx');
define('NONCE_SALT',       'Fdohl8atQ9VB`9a+Fj(V{[X+q+s*A,|w@=Qx+sXX8> <>AkH?ls-s2wx-U)T/wVm');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Pr�fix
 *
 *  Wenn du verschiedene Pr�fixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Sprachdatei
 *
 * Hier kannst du einstellen, welche Sprachdatei benutzt werden soll. Die entsprechende
 * Sprachdatei muss im Ordner wp-content/languages vorhanden sein, beispielsweise de_DE.mo
 * Wenn du nichts eintr�gst, wird Englisch genommen.
 */
define('WPLANG', 'de_DE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');