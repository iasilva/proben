<?php
/**
 * Created by PhpStorm.
 * User: ivana
 * Date: 04/03/2019
 * Time: 18:10
 */

namespace App\Controller;
use App\Mvc\Controller;
use App\Model\Tratamento\TratamentoModel;
use App\Util\Redirect\Redirect;

class TratamentoController extends Controller
{
    public function index(){
        $this->view->setTitle('Cadastrar pronome de tratamento');
        $this->view->render('Tratamento/FormularioCadastroTratamento');
    }

    public function cadastrar(){


        $tratamento= new TratamentoModel();
        $tratamento->setSigla(filter_input(INPUT_POST,'sigla_tratamento',FILTER_SANITIZE_STRING));
        $tratamento->setExtenso(filter_input(INPUT_POST,'extenso_tratamento',FILTER_SANITIZE_STRING));
        try{
            $tratamento->save();
            Redirect::para('../tratamento?cad-tratamento=success');
        }catch (\Exception $e){
            echo $e->getCode().' '.$e->getCode();
        }
    }
    

}