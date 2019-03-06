<?php
session_start();
/**
 * Temporário*****************************************
 */



/**
 * Constante <em>DIR</em> sempre remete ao diretório root
 */
define("DIR", dirname(__FILE__));

/**
 * Constante <em>DS</em> será utilizada para separação de diretório
 */
define("DS", DIRECTORY_SEPARATOR);

/**
 * Constante <em>VIEW_DIR</em> sempre remete ao diretório root DE VIEWS
 */
    define("VIEW_DIR", DIR.DS."App".DS.'View');
    
/**
 * Constante <em>HTML_DIR</em> sempre remete ao diretório de include DE VIEWS
 */
    define('HTML_DIR', VIEW_DIR.DS.'includes'.DS);

/**
 * Cria uma constante com DIR para windows
 */
$config=json_decode(file_get_contents(DIR.'/App/Config/config.json'));
if($config->ambiente==='desenvolvimento'){
    define('DIR_WIN',$config->desenvolvimento->host);
    define('URL',$config->desenvolvimento->url);
}elseif ($config->ambiente==='producao'){
    define('DIR_WIN',$config->producao->host);
}else{
    die("Há um erro em seu arquivo de configuração de ambiente.");
}


