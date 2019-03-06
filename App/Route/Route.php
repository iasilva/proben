<?php
unset($_GET['public']);/*Exclui a váriavel public criada pelo apache desnecessáriamente*/


/**
 * verifica a existência de uma variável GET com o nome de <em>Controller</em>
 * Essa variável define a classe a ser instanciada
 */
$controller = isset($_GET['controller']) ? filter_input(INPUT_GET, "controller", FILTER_DEFAULT) : "";
/**
 * verifica a existência de uma variável GET com o nome de <em>action</em>
 * Essa variável define o método ou ação a ser executada
 */
$action = isset($_GET['action']) ? filter_input(INPUT_GET, "action", FILTER_DEFAULT) : "index";

/**
 * Roteamento de acordo com as variáveis passadas
 * Aqui eu defino o Controller e o método a ser chamado.
 */

switch ($controller) {
    /**
     * Caso a página chamada seja <em>cart</em>.
     * A classe Cart é repon~ável das ações do carrinho de compra
     */
    case 'teste':
        $teste = new \App\Controller\TesteController();
        call_user_func(array($teste, $action), array());
        break;

    case 'usuario':
        $usuario = new \App\Controller\UsuarioController();
        call_user_func(array($usuario, $action), array());
        break;
    case 'carta':
        $carta = new \App\Controller\CartaController();
        call_user_func(array($carta, $action), array());
        break;
    case 'empresa':
        $empresa = new \App\Controller\EmpresaController();
        call_user_func(array($empresa, $action), array());
        break;
    case 'tcorrespondencia':
        $tipoCorrespondencia = new \App\Controller\TipoCorrespondenciaController();
        call_user_func(array($tipoCorrespondencia, $action), array());
        break;
    case 'tratamento'://Tem a ver com pronome e forma de tratamento utilizada na correspondência
        $tratamento = new \App\Controller\TratamentoController();
        call_user_func(array($tratamento, $action), array());
        break;
    case 'admin':
        $admin = new \App\Controller\AdminController();
        call_user_func(array($admin, $action), array());
        break;

    case 'admin':
        echo 'Página administrativa';

        break;


    default:
        $home = new \App\Controller\HomeController();
        call_user_func_array(array($home, $action), array());
        break;
}