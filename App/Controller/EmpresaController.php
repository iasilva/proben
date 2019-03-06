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
use App\Util\Redirect\Redirect;


class EmpresaController extends Controller
{
    public function index(){
        $this->view->setTitle("Empresas");
        $this->view->render("Empresa/Home-empresa");

    }

    public function cadastrar()
    {
        $empresa= new EmpresaModel();
        $empresa->setNome(filter_input(INPUT_POST,"nome_empresa",FILTER_SANITIZE_STRING));
        $empresa->setEmail(filter_input(INPUT_POST,'email_empresa',FILTER_SANITIZE_EMAIL));
        $empresa->setEndereco(filter_input(INPUT_POST,'endereco_empresa'));
        $empresa->setNumero(filter_input(INPUT_POST,'num_endereco_empresa'));
        $empresa->setBairro(filter_input(INPUT_POST,'bairro_empresa'),FILTER_SANITIZE_STRING);
        $empresa->setCidade(filter_input(INPUT_POST,'cidade_empresa'),FILTER_SANITIZE_STRING);
        $empresa->setEstado(filter_input(INPUT_POST,'uf_empresa'),FILTER_SANITIZE_STRING);
        $empresa->setCep(filter_input(INPUT_POST,'cep_empresa'));
        try{
            $empresa->save();
            Redirect::para('../empresa?cad-emp=success');// rediciona para o método index do controller
        }catch (\Exception $e){
            echo $e->getMessage();
        }

    }
    public function exibe()
    {

    }
}