<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'asenha123');

/** nome do host do MySQL */
define('DB_HOST', 'db');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vyNzgT!aSh6z|vRxE(F^Ik#` QrO^i0(-z*Hz N:q>GSs]tNwJidT)Xavcjsm)zr');
define('SECURE_AUTH_KEY',  '11r,Crrlp}<hdW|l!MR/RxN:p*ull!@T+WbfqIVru:-`oK-d8LQI8prq(H:F(w8|');
define('LOGGED_IN_KEY',    '|+Oh,TCQ,~iF(QRBu-.(+Qcu-c<QXqT|Ni`V$+Q|qs-@i6nqC+7*3+%f+xU@LMoT');
define('NONCE_KEY',        'efZXh5cRd,TCuQaZXC;)r=?W!X`$G^5~nKty2&QY%5jS+Af}-h501oKO@J`J@w9S');
define('AUTH_SALT',        '8NFa8)uxi>B/$)Aw/hn`9AgwsxtY5#1`d-F^fmwm/^:Sz,g<0&o1^V>2_@a}+SO3');
define('SECURE_AUTH_SALT', 'F@Ezd6~jqI{<SUl&ZhS`|-6$_Y(?[XBNnJvSYR&ty-I,~7iQ<`%dSwC;huaN.>4H');
define('LOGGED_IN_SALT',   '(+1OqtSQA7|4PZC+dV*Ogjc(i^dR_V*|BT^^-)_89jG8hq8-nN_Qz6g|>FyrHqCR');
define('NONCE_SALT',       'dQtZ!.2-DH|5.IE|..@=rE1|]X3l00;|2%aN_ug--Wh8g]wW0{C*W[N]2B{TV-GE');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
