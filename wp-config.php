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
define('DB_NAME', 'exo_wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '}gK?##sGzv][[?]C~g$^KbL.+Tg0kdHx90wZyr{tDfdQH,`g;LcewTf{ClzL0{cS');
define('SECURE_AUTH_KEY',  '6(6GrE?a`RB-ZvI`!2*qha&nGV?.`asnriDf|GH,omHLiwd{K84yEoJ23Qm4tFzF');
define('LOGGED_IN_KEY',    'oOB+$bhw7GC>%la6in(Gn<p-sf-WBsYSTv65?H4C$I8hVzza;hFZBD7RHYgJz7CQ');
define('NONCE_KEY',        'rlpc)KhKaocUMA{;PFH?UD_@jOhi_PmtYZ5GG#q<(;d-[;Z)#JnIKL4!_h[i1iVR');
define('AUTH_SALT',        '=O9</89Vok7;jWTCwuhz=?7dOZIUDO=Er1[]p-fh.5%3#i-IZ>E<z2LwuT$FG6sZ');
define('SECURE_AUTH_SALT', 'yzke+b]2/.w+t/9<r9AUBJ| j/Bb~J{N{Nk^~nl;L|;I4gh1-E5X&H]%3gW/5w.D');
define('LOGGED_IN_SALT',   'h]Z-e?1b}E&x+i0_cJ7/Sl&huE;Z|)x3zGsx=sD1OC>]LquEhjVJx))q>U8=#WW4');
define('NONCE_SALT',       ')MC#~B.~X*~Rc P6B5$24(#zs9vdu@nHX)nL6;wn&WXM%g$=s&0(Ii1^!{b,:<6T');
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
