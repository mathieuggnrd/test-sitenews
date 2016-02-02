<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', '');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', '');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', '127.0.0.1');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}J+HUBusjXAt[K&,03}rovDeq2<*(k*yenQnP34`*}( k:,@<-]5D*>ErXq=Frz@');
define('SECURE_AUTH_KEY',  '-d.x_auwV[D&fK&To0gi![Y)j.[vSH@#QRs3Hi)~`40ytXoC`L?br2],s/JF;Q9n');
define('LOGGED_IN_KEY',    'Pg=^)O$5C^Gw,I<:}*2>sC|  4tYg2jDw4^co:XK}?]*G8xXwIY~A5&t8dFrKfB]');
define('NONCE_KEY',        'Rkp0@v$] 3=xFeBvj2Nu7.GW|w;O{d-n5Iz0SE[NnV)@5(rfyZNsp3_P=42qQTnj');
define('AUTH_SALT',        '!EhT+Zv`ccP1f0%/v+(aT~OKXh+o=xqam+3uQPg>WV&[+ fdp~C>J%~M4OA{mAgx');
define('SECURE_AUTH_SALT', 'GfJc<J>M1c{Npx}_~.s<s)+v#-GLOE/~aY-n;7JhrSt0>ZA&3_Qr=>+$He?F/o:`');
define('LOGGED_IN_SALT',   ')w-}i}L3]O0--#;N:O-K$~Vi<3Gu)xZi/CI?b1)-P7`elB_%-}q1BB{&^Af|x7SR');
define('NONCE_SALT',       ',kqUcH#N,1g[11J]%v+h,KD,3)3r9nU~|;9,M4yLd)qXTO>2c|an#7fj~yWyw)IL');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
