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
define('DB_NAME', 'Wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'Wordpress');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'ifgoiano@123');

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
define('AUTH_KEY',         'wcy3CAe4tsNwLd4J,oaCmut3W&3-^M*PKE8mpNp_u<S?L`o#?nY;kpXEhGQ2~B.V');
define('SECURE_AUTH_KEY',  ':IM~g_Hu.PJgn56t_2QRVVpfBvvLg]]x>f*;?k5Mlyq)=L$Jh`0>tyQz(KbS+R(_');
define('LOGGED_IN_KEY',    ';{`-8/tY&](06ME237;,z/w)v@8!i<0$&<OHdpz_@@pFf (vd{{ctBnJ[,4TxqG4');
define('NONCE_KEY',        'GB~BdBURCL[Gg]>@y^Ty BnXl=2[}?Vc(cA8U;Twxg;JkPhv;*{0e<RDjZ0Gpb#U');
define('AUTH_SALT',        '(o+]{_2Tgii<!*i[Vteu+vB9v.cB>?A?@+!Q,Wi66[`!oGQePSn/+u{i#K=x;q2n');
define('SECURE_AUTH_SALT', 'fRP;qyAly4jx2yD%:BZdHpvab?%iya|DP]yXP)!fyqfj`w7cY$3P>/P^Xj}4GMbt');
define('LOGGED_IN_SALT',   '.51JFqL@r(wyP)J-8V~&|.3a]8Q)PZtK!l?NbDNbFasCuzl3V!JLadY{NFXwM#5X');
define('NONCE_SALT',       'Bt-z[s5NJ$FJS2Nn3X6hhKb%#e_M?-05?F1tZ[($7KU}[^E&Yb_]BZPK`k[brb_`');

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
