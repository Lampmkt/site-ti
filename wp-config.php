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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '0J}8V^37IEl#&B*U1r!qR1PIO5)m`z##1^G>=l5F6fF[B8a5Q#^P#3%1P4UInu6r' );
define( 'SECURE_AUTH_KEY',  '[j>-19My]O42O2igNOk;p_#(M4//zQfI0 Ab42>:N{!@Ts]1B >5F]uM LHwVB2K' );
define( 'LOGGED_IN_KEY',    'fYiZRIF1LHrJL4+]d~w+cZ[t5J|8SAzmD&>%98O@6u+OJo#$qh5$u3/4I8LV}1>-' );
define( 'NONCE_KEY',        '_/UBw3Si6za]#m0RWL@3v),`O1@?UcWXZ]=.%)cj^k/x6,+Or@0p%gGRw NO|0n(' );
define( 'AUTH_SALT',        'B7CI4QoX;H+bAh<SrI]{%?<jeG`0/-sbzw?iQ#nwk_uE13DaBOAqt`o$Ad5i=+F0' );
define( 'SECURE_AUTH_SALT', 'fRz#dWA}TSv#jOCwOP{I[n(bLCjQp6R(v5V<rLwQZ|$}]wiVxC|Yazg`6X#}i^)c' );
define( 'LOGGED_IN_SALT',   '.Dg%p8*(LaH`]GR92oEi5(_DAq}<wKe_UR>S$[eM9a7vLLw/~sl14@_TU0|s]TUG' );
define( 'NONCE_SALT',       'v~{3o]UhpJ3wP{^jJm=H^63J;nf2{qf9[V{cc;`74]V`LNp l9<FB,fOwSOcr@d<' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
