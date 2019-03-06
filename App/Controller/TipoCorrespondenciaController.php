<?php


namespace App\Controller;

use App\Mvc\Controller;
use App\Model\TipoCorrespondencia\TipoCorrespondenciaModel;
use App\Util\Redirect\Redirect;

class TipoCorrespondenciaController extends Controller
{
    public function index(){
        $this->view->setTitle("Cadastrar tipo de correspondência");
        $this->view->render('TipoCorrespondencia/FormularioCadastroTipo');
    }
    public function cadastrar(){
        $tipoCorrespondencia= new TipoCorrespondenciaModel();
        $tipoCorrespondencia->setDescricao(filter_input(INPUT_POST,'tipo_correspondencia_descricao',FILTER_SANITIZE_STRING));

        try{
            $tipoCorrespondencia->save();
            Redirect::para('../tcorrespondencia?cad-tipo=success');// rediciona para o método index do controller
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }

}