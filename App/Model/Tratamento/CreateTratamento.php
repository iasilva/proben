<?php

namespace App\Model\Tratamento;
use App\Config\Database\Database;

/**
 * Class CreateTratamento
 * @package App\Model\Tratamento
 */
class CreateTratamento
{

    private $pdo;
    private $tratamento;

    public function __construct() {
        $this->pdo = Database::conexao();
    }


    public function save(TratamentoModel $tratamento) {
        $this->tratamento = $tratamento;
        $this->insert();
        return $this->tratamento;
    }

    /**
     * @return OBJECT com os dados atuais inseridos acrescido do id no banco de dados
     */
    private function insert() {
        $extenso = ucwords(strtolower($this->tratamento->getExtenso()));
        $sigla = $this->tratamento->getSigla();


        $stmt = $this->pdo->prepare($this->prepareSql());
        $stmt->bindParam(":extenso", $extenso, \PDO::PARAM_STR);
        $stmt->bindParam(":sigla", $sigla, \PDO::PARAM_STR);
        try{
            $stmt->execute();
            $this->tratamento->setId($this->pdo->lastInsertId());

        }catch (\Exception $e){
            echo $e->getMessage();
            die("Houve um erro na tentativa de cadastrar a empresa. Erro gerado na classe ".__CLASS__);
        }

    }

    /**
     * @return string contendo o insert contendo as mascaras para inserção na tabela
     */
    private function prepareSql() {
        return "INSERT INTO {$this->tratamento->getTable()}"
            . " (extenso,sigla)"
            . " VALUES (:extenso,:sigla)";
    }

}