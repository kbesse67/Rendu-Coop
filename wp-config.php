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
define('DB_NAME', 'lacoop');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '<. iUg?5 s<3?D<TvG&b*0n)!TO0q<`0oGt=$5b{4H]7pB__122@IwW!JbdP@]*B');
define('SECURE_AUTH_KEY',  'RT*F+j9<eI^25Ry@TL#B[oYn{lHGvZ)BRq+mxalNlYKa59ab1SCh%U:8<|;L7FjI');
define('LOGGED_IN_KEY',    '})j$FWoS%@5 7PaqSu8ahtF}?WTkmXMPVmSK4]j-[7!g:/7V$Tq^O??BKjcj1F.t');
define('NONCE_KEY',        '|*[0<C7RsWmV$cIhu#Rvh)qD@N~3fNQuWQGf2ft7<Y;o*s!}%U]IROGPfFDaw~Xx');
define('AUTH_SALT',        '+WOpqo-0q0j8ky9Jmsw=6uk/]y3.2p?7eiAp9VpJ`@ze*?o}K{2WixD?,h,`$DA2');
define('SECURE_AUTH_SALT', '3:a8iAffRYudrmHkwaN&{3}#;nJZJ.va]@)PVzh]l6-c]+FNe6MhCTy~5@gIQ fD');
define('LOGGED_IN_SALT',   '/#4Ll`lpL,cch3%5`hMSBfhH^S#ZEK$d[wpOpUZNR-l)i9|k.Y5hnN}B0$n_{A>o');
define('NONCE_SALT',       '~k6@oQ&c`R2v-*4I*$IEt_E)vWO@bPw]3ge  S~&!{b$Lv|!W`z}AJZk+|y3idaF');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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