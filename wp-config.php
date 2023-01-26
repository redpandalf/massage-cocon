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
define( 'DB_NAME', 'qrtv7790_cocon' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'qrtv7790_webmaster' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'MCmFC0y3t4YN?' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Z=<s[|>VH&#%=-`)0t%is7rVGjRPG3OL {U$5=zbdHuwtMOtr8W1&BuAe=Jh7^06' );
define( 'SECURE_AUTH_KEY',  '=2Ca^K]Gn)Y4Icq,`wZAYf/>u)e/{2/L)`3zKY#l7S&k!aIJ#||g_N~>rN]v0TF3' );
define( 'LOGGED_IN_KEY',    'Q*T1ar>I-6TeDrqbH+SBo,1oMPeYMUCu:^o{[f3h@VE-[k8jvM`0j3U]*2KgQ#n<' );
define( 'NONCE_KEY',        '8(m56_E( {+@$P,mP8hiLUp<#lVv%MyOeBiA8CQp/YBO(JG]st%]cZlDE&[;z8An' );
define( 'AUTH_SALT',        'LyzYLfMbA[K+Qi.ZO|Hve ;[b#YXP&AN]1b1*771I_}J$<4Kaw_[rg/Zi2M_Qp`N' );
define( 'SECURE_AUTH_SALT', ']AYz-p02|[|<9N5QI}JIhCdy_^;b(VXl_1pk}BM*v(: t-t[R>Yw2I k@nsUbPkY' );
define( 'LOGGED_IN_SALT',   '<g:*Joe_PnWQu:*Fpu<eN/gzX${z1`32ezOKvyHgPjI$*WES[phLjsLuawHm}rSC' );
define( 'NONCE_SALT',       'nYdk{%<T&X1-65a5_p>*~(W4ahGFin!0@H29W;sDZ9saF9_evIxfBT A|WX0%STd' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpc_';

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
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
