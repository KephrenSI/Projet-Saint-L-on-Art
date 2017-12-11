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
define('DB_NAME', 'saintleonart');

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
define('AUTH_KEY',         'u*6a}T4zG@|8Ifsn<}EL<(Nnn&1t7PiDknwe(=TWJDSaJhF%6p[}by?`3W26}z>Q');
define('SECURE_AUTH_KEY',  '(g!VOa$}<2>nUS_+1N*T=B{uwR|~OMHLdaoTo5v=h|4t^T;H}``I>>R:~lYPNjN:');
define('LOGGED_IN_KEY',    '6lUx#&)}UsN|N*d11B`>s:Yb+|y@XGaxpAuAn1*l5F%IuH),glq;IloRJlN) |Q&');
define('NONCE_KEY',        '+@Wi]5`ee#3yQ]Gnf(v DqTikgdM}htm02uzmomeF,H@:aY<BWp~O5LJqekW(_Be');
define('AUTH_SALT',        'MA>m$6*7wzJj~R08CwxTVD,/n:)7]f=Eow^tV>5r@JrHQuOW0V?M54)?Y9Ue-}3W');
define('SECURE_AUTH_SALT', '<qa#<A]P9Mq?l!]Wv&6y%![rXxjA**}exh:jNCq;~1ci(26.i3DFe=:L<7~o>m+@');
define('LOGGED_IN_SALT',   'R+YHye/o;e]]H&6Zjwd+#b[v16yG2`T 8i8q.3Iu|E@*!w,hQvj._*IO>sM*e`p<');
define('NONCE_SALT',       'g1m}9}.1}16ctaXo8oO!1.njqz| kMO^H>st-h>sMBE{tyP;Gv-]C@d*ST8Zx w$');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'sla_';

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