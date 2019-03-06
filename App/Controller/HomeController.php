<?php
/**
 * Created by PhpStorm.
 * User: INSS
 * Date: 23/08/2017
 * Time: 16:19
 */

namespace App\Controller;


use App\Mvc\Controller;

class HomeController extends Controller
{
    public function index(){
        $this->view->setTitle("Aplicativo de Administração de contratos rurais");
        $this->view->render("Home/Principal");
    }
}