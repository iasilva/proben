<?php
/**
 * Created by PhpStorm.
 * User: INSS
 * Date: 23/08/2017
 * Time: 16:19
 */

namespace App\Controller;


use App\Mvc\Controller;
use Carbon\Carbon;
use Carbon\Factory;

class TesteController extends Controller
{
    public function index(){
       $this->view->setTitle("Aplicativo de TESTES");
        $c= new Factory([
            'locale'=>'pt-BR',
            'timezone'=>'America/Sao_Paulo'
        ]);
       $this->view->set('carbon',$c);

        $this->view->render("Teste/TesteInicial");
    }
}