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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'presscommerce' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4rLu5dT&kp:,@oJ,4jk}B7(u<f@ugi>>:G!enOONe%,>lCvw tvmcy_]RZdE0pz$' );
define( 'SECURE_AUTH_KEY',  '9dzU9:cY/o`3_^Z-aZ&TkdBu?.&Yj>LmmoVx>Sa}?k4)>K_fQ-:duik28v~3;2w]' );
define( 'LOGGED_IN_KEY',    '~|I%Y#;uO=Z1ub>9,UFRky*7O[m8vzjQ(G6,e5`aH#[#KYHQa/3XDOAy&P%.k5Af' );
define( 'NONCE_KEY',        'K=TPlfeR<w,~aZZ,[U{tmR*`lFz(aML?L @{hM7p[$g`~*antFrH!ZZw3=c.9av)' );
define( 'AUTH_SALT',        'Rg>Yb*?oj@94!3fS;8Ekn-A5!J5ix1`W2gem+GDu#~O5!|~!zVyQ*TD0V_z`aJpf' );
define( 'SECURE_AUTH_SALT', '4B^}B78VkBXA-,r`<tiXKs{SVvQ(c$B`|29xPFHPYsmM%c~C=8,W!G8E8#5|WSl ' );
define( 'LOGGED_IN_SALT',   'z?Nu~gwcA6xpo)Q}+-y7U,~1;WHX)CQVyMu~tJr5jgx{.&YH`>yu893GKzMphyux' );
define( 'NONCE_SALT',       'E4*Cs@xl$Ku/nTsZ Z,=lH,/>&wVF`3D5.?~ELk%EYu>C1iDxdBKdWGSmFgpzYR#' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
