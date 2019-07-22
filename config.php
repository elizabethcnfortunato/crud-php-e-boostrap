<?php

/**
* Description: Arquivo de configurações que será utilizados em todos os scripts PHP do sistema. 
* Author: Elizabeth Fortunato
*/



/** Nome do BD */
define('DB_NAME','bd_address');

/** Usuário do BD */
define('DB_USER','root');

/** Senha do BD */
define('DB_PASSWORD','');

/** Nome do Host */
define('DB_HOST','localhost');

/** caminho absoluto para a pasta do sistema */
if(!defined('ABSPATH')){
    define('ABSPATH',dirname(__FILE__).'/');
}

/** caminho no server para o sistema */

if(!defined('BASEURL')){
   define('BASEURL','/projetoElizabeth/'); 
}

/** caminho do arquivo de BD*/

 if(!defined('DBAPI')){
     define('DBAPI',ABSPATH.'inc/database.php');
 }

/** caminhos dos templates de header e footer **/	
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');	
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');

?>