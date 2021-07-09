<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'sql11423847' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'sql11423847' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Dh4YKrqnxm' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'sql11.freesqldatabase.com' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(Q}X)pvC?G:/Bm#I CN_cZ86+}z:z~@N38=Jf<w0|>9N=D-SLw~:Zh51 .c9Jsp3' );
define( 'SECURE_AUTH_KEY',  '_5,ni>%a$)EO*;k)a~u?DNM|Y_zrdS%CMe+D}Fy3%EXD_pm:X.k-Bl+|9y&x]T-I' );
define( 'LOGGED_IN_KEY',    'xz]~JGXT9=d,x&1k7n5`e?2uLc,8eyS=i*}ThP5Ce8~ <2&* ?q|^XT1S:F p1`Q' );
define( 'NONCE_KEY',        'j{MUr0N7:mnXuoeg:Zi_E-ol>eXbZ>y<>-*|IoDOY`Z}^EKHK+B]?FD2mc@S@V`s' );
define( 'AUTH_SALT',        'pTY4>r{oGY2%;i2J|MJ$=_sdr]KB6YA}ESwFPoOM$4Z>>qjdmIj)}A<u=)/]9L%v' );
define( 'SECURE_AUTH_SALT', 'VM~%c#gHN@(h#KTt |VyBPj+^YRf1MW7i%eSA }cypMkK5Mo$o)Q:6nzgEGFp78V' );
define( 'LOGGED_IN_SALT',   'c]ofDyipJpToJPVgCBF01l-:lD+@5Lw%||bHD=n=4lMRtgXoQ6Y3:$;nun|P~Di#' );
define( 'NONCE_SALT',       'F3sMl|pb,3bsSg425B.Z;cN}!ddyYyIM) Ssy]0@$s]4^!qLd>QGx5?D_7J1<zp8' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
