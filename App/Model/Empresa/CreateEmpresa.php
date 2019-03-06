<?php

namespace App\Model\Empresa;


use App\Config\Database\Database;


/**
 * Responsável pela inserção dos dados do Usuário no banco de dados
 *
 * @author ivana
 */
class CreateEmpresa {

    private $pdo;
    private $empresa;

    public function __construct() {
        $this->pdo = Database::conexao();
    }

    public function save(EmpresaModel $empresa) {
        $this->empresa = $empresa;
        $this->insert();
        return $this->empresa;
    }

    private function insert() {
        $nome = ucwords(strtolower($this->empresa->getNome()));
        $email = strtolower($this->empresa->getEmail());
        $endereco= $this->empresa->getEndereco();
        $bairro = $this->empresa->getBairro();
        $num = strtoupper($this->empresa->getNumero());
        $cidade = $this->empresa->getCidade();
        $estado = $this->empresa->getEstado();
        $cep=$this->empresa->getCep();

        $stmt = $this->pdo->prepare($this->prepareSql());
        $stmt->bindParam(":nome", $nome, \PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, \PDO::PARAM_STR);
        $stmt->bindParam(":endereco", $endereco, \PDO::PARAM_STR);
        $stmt->bindParam(":bairro", $bairro, \PDO::PARAM_STR);
        $stmt->bindParam(":numero", $num, \PDO::PARAM_STR);
        $stmt->bindParam(":cidade", $cidade, \PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, \PDO::PARAM_STR);
        $stmt->bindParam(":cep", $cep, \PDO::PARAM_STR);
       try{
           $stmt->execute();
           $this->empresa->setId($this->pdo->lastInsertId());

       }catch (\Exception $e){
           echo $e->getMessage();
           die("Houve um erro na tentativa de cadastrar a empresa. Erro gerado na classe ".__CLASS__);
       }

    }

    private function prepareSql() {
        return "INSERT INTO {$this->empresa->getTable()}"
            . " (nome,email, endereco, bairro, numero, cidade, estado,cep)"
            . " VALUES (:nome,:email, :endereco, :bairro, :numero, :cidade, :estado,:cep)";
    }

}
