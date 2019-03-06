<?php
/**
 * Created by PhpStorm.
 * User: INSS
 * Date: 23/08/2017
 * Time: 16:19
 */

namespace App\Controller;


use App\Mvc\Controller;
use App\Model\Empresa\EmpresaModel;


class CartaController extends Controller
{
    public function index(){
        $this->view->setTitle("Gerador de cartas e ofícios");
        $this->view->render("Carta/Home-carta");
        $empresa=new EmpresaModel();
    }

    public function processa()
    {
        $this->view->setTitle("Editar ofício");
        $this->view->set('referencia',$_POST['referencia-ofc']);
        $this->view->render("Carta/Editor");
    }
    public function exibe()
    {
        $this->view->setTitle("Exibe correspondência");
        $this->view->render("Carta/Correspondencia");
    }
}