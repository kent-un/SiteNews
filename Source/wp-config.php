<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'TechNews');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'TechNews');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'frfake');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7F$)290JN3u8y~~eF9LLKAd;W8$ez^qu NbKz=Y_b(0,*Z);f:v9no.N%#5rS(=F');
define('SECURE_AUTH_KEY',  ']5sqU=prE[B@g`W-?6$:|3ye%FEPutX2pp< TW#:9:1}4vv-qR[ii?)rcuv 1jI(');
define('LOGGED_IN_KEY',    'bN;L9(>sO`?T?)N936dH<jpy7R4N{*uF:>&??tGRp ^Z4L<<^LA_}=w*w{X/B/V+');
define('NONCE_KEY',        'c{IOFwp,G8$JX67n[FoBTKdzw:GW0[xb*]cGDiUJ5SyNfFlJ7?p&fyj=`^Va^B@+');
define('AUTH_SALT',        '3jb=!1qRppJx=-[pEqe5+Xc&:Bm~-SB4nM`C~9 byT+%L8IwlTm]71ruhL?>$09.');
define('SECURE_AUTH_SALT', '*2+_z/.%$D8lI natdQe,c7l:P!qYD^SaK~f28 FRTiQ]a*sieUEZYP!#37d[QDb');
define('LOGGED_IN_SALT',   '^Q<96tU6]jg)]<<.5O({wg})o&p+L:Cd*J_!Ls0V]AH;Yo93[2VQU=_j4VQjPrjk');
define('NONCE_SALT',       '4N)7!U*&l^-IodWf9iHB;N%P2-9ErlT)LHBxaO;m]=P)M3`{6JYC>?b8Yc1n]m4B');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
