<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_search_ajax');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yE$}lGHuNzYw*}$BP?}RJ7<U*5 /{73zbN./[-cAPNZMkbeo{{~xSuL)+ApJ7e<!');
define('SECURE_AUTH_KEY',  'H4mgFUZ2:r$~ llp;8q%~[b; <#wLPp[BOx3<,|BTU{?,AC`@0C}=+.rj`{-j0jc');
define('LOGGED_IN_KEY',    '-B.cN!~LUK{U90}#=,Zx}|pUuOdh@A8;c+pA5=7O4k$_W=pi)PrZIi96HEV=WZA)');
define('NONCE_KEY',        '2;[atAc8mlzH>.X))dVfnfw{pSOh+b78<Dc<5TwSKBX&GI({8@/K{eapr#M?qR?.');
define('AUTH_SALT',        'fQ;+pY}LL.BB0/ dh7^Cl[NZq@2 WnrC.pNI?OSLzXiKQD[SqN+eP+LE4Wj|=Q]m');
define('SECURE_AUTH_SALT', 'tz4{8jr{vS?L-GTJQmpEL4A2C3/3:*VpoQq!j{#Cr`U /;q+`6c_=$MxF_K#VlKr');
define('LOGGED_IN_SALT',   'R52b+ao2+4bPVIb2oJ /rQ}p2jt,25 3jN,Xe$MeArNt4)a R[aKoNn&n+a/~T[2');
define('NONCE_SALT',       'wknE= hc;`dPtH>V<A!/x}9c$Wa&ktsLsYDH?=MAVCYPia[w)I1aI/qN?cW387<7');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
