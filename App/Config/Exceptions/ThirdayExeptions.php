<?php
/**
 * Created by PhpStorm.
 * User: INSS
 * Date: 22/09/2017
 * Time: 13:35
 */

namespace App\Config\Exceptions;


use Throwable;

class ThirdayExeptions extends \Exception
{
    protected $classe;
    public function __construct($message = "",$classe = "", $code = 0, Throwable $previous = null)
    {
        $this->classe=$classe;
        parent::__construct($message, $code, $previous);
    }
    public function __toString()
    {
        $configJson=json_decode(file_get_contents(DIR.'/App/Config/config.json'));
        if($configJson->ambiente==='desenvolvimento'){
            $msg= "<p>Ocorreu uma exceção na classe <em>". $this->classe."</em> na linha ".$this->getLine()."</p>";

            return $msg. "<strong>Código:</strong> [{$this->code}]
                          <br>                           
                          <strong>Mensagem:</strong> {$this->message}\n";
        }elseif ($configJson->ambiente==='producao'){
            return $this->getMessage();
        }else{
            die("Há um erro em seu arquivo de configuração de ambiente.");
        }
    }

}