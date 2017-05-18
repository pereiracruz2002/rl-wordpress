<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'rl');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'senha');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c:a7h/04]L-@WD8q>{tg#Xl+w; j:[#>->!4B?TikE4/Mv 4UQ=.F}H_jar>/04J');
define('SECURE_AUTH_KEY',  '-_6X6j:.|o(s(*/aCDSI9A>4a8LU1,_l;233B3y[lyp@M`ijR09:T9|iG)9]74H.');
define('LOGGED_IN_KEY',    'hKWB{Zn/_$Vf`}Yct)/AQVTDo9{6L9#Z,Zg$Y;@}vu<s;95usn(YEv[XX+eZ#seL');
define('NONCE_KEY',        'Sg&?<*xrVsV_TgS<U{^{F`a=WWy7P?KjT1HR@LWS(%6^x$IRlr:i8FKWT;uAeVpc');
define('AUTH_SALT',        '@Y)3=PM8%yrMJfO(AnRuXn;y$jd+x^r)$ilZVi- >M1x{a{GT$%fm(!8j~_Spcr*');
define('SECURE_AUTH_SALT', ' LS:gY4|R+/Srs@8Z`5T(e(cdtBUqP6}T]<fzz][$8*Rw]Gs&up0;+AO?dr/OE9<');
define('LOGGED_IN_SALT',   'E{LzC<t8a4<t?b>DXaSDQ$`skh#4y>LZC{z2jC&N~[`;]tj2zg*u,% K.pE7i/hU');
define('NONCE_SALT',       'lTCzJ$7$iQ>ep3Hz`2Vh@o>;=)M[AI9N UwGyd<fquU2EFB=yQ%nUtiDd3;kX)&J');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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


/*zybxpto0192@ */
/*admin - senha123*/