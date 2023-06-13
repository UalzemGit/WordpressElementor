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
define( 'DB_NAME', 'elementor' );

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
define( 'AUTH_KEY',         '3USV_uZy?q:=-@~B9ODFXsa0Wpd*p/&*I<{>RD=ff4q;8ey]B6t^ssQ+i<H{d!%`' );
define( 'SECURE_AUTH_KEY',  '~RnJ-)VxicB{htLfEi3]#Cl+|.iCIklAxF5fh^BmTw:$&vT7%suI5_9 XKo@(y0Z' );
define( 'LOGGED_IN_KEY',    '6!]J@/rp[)_!cy=1b _2F/;|bJ%1.4S!(tMyTlDfL??/kgLM4LiL*I*868; Hw,`' );
define( 'NONCE_KEY',        ' j=c4, +$7s+@d9v$.$MBTbkT=ZV-,v}wE/)l9}b^BZ-~u&PnjC`]~}?8$ey_9D2' );
define( 'AUTH_SALT',        'h!p9j:r 2WY_$s`L^`/}$8vj0mAt>Z<FFD]Fg-?Wf2>_UA1_&l48)V=h&i>RqP&:' );
define( 'SECURE_AUTH_SALT', 'o&g)xFcc5jpW`LCx44~1?]<AVS[Jp-x(_&~u/=h0gu__*(R)~F*+r~t(gpqq_g&(' );
define( 'LOGGED_IN_SALT',   '7BdoFvwX$(?}pMYn>VaDOIG_::VkPX`SyUB[-0f$~,,Yf[a[/2nrN (hWtDU.(>s' );
define( 'NONCE_SALT',       ':Y6J_3KK+~?2]2g*$~j,zn;}*xz-BRxh1FV!2R#VBe=IQd{*z.Mpe`LbbfFTQR5<' );

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
