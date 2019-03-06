<?php
/**
 * Created by PhpStorm.
 * User: INSS
 * Date: 23/08/2017
 * Time: 16:19
 */

namespace App\Controller;


use App\Mvc\Controller;

use App\Config\Database\Database;


class UsuarioController extends Controller
{
    private $db;
    public function __construct() {        
        parent::__construct();     
        $this->db= Database::conexao();
        
    }
    public function index(){
        $this->view->setTitle("Controle e exibição dos usuários cadastrados");        
        $this->view->set('nome','Ivan');
        $this->view->render("Usuario/Home-Usuario");   
    }
    public function cadastrar(){
        $this->view->setTitle("Cadastrar usuário");
        $this->view->render("Usuario/Cadastro-Usuario");   
    }
}