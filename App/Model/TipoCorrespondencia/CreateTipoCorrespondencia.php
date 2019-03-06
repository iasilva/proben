<?php

namespace App\Model\TipoCorrespondencia;
use App\Config\Database\Database;

/**
 * Class CreateTipoCorrespondencia
 * @package App\Model\TipoCorrespondencia
 * Classe efetiva a transação de inserção de um novo tipo de correspondência no Banco de dados, todavia essa classe não faz
 * nenhuma verificação de integridade.
 */

class CreateTipoCorrespondencia
{

    private $pdo;
    private $tipoCorrespondencia;

    public function __construct() {
        $this->pdo = Database::conexao();
    }

    /**
     * Efetua a inserção no banco de dados e devolve o objeto já com o id do banco de dados
     * @param TipoCorrespondenciaModel $tipoCorrespondencia
     * @return TipoCorrespondenciaModel
     */
    public function save(TipoCorrespondenciaModel $tipoCorrespondencia) {
        $this->tipoCorrespondencia = $tipoCorrespondencia;
        $this->insert();
        return $this->tipoCorrespondencia;
    }

    /**
     * @return OBJECT com os dados atuais inseridos acrescido do id no banco de dados
     */
    private function insert() {
        $descricao = ucfirst(strtolower($this->tipoCorrespondencia->getDescricao()));
        $stmt = $this->pdo->prepare($this->prepareSql());
        $stmt->bindParam(":descricao", $descricao, \PDO::PARAM_STR);
        try{
            $stmt->execute();
            $this->tipoCorrespondencia->setId($this->pdo->lastInsertId());

        }catch (\Exception $e){
            echo $e->getMessage();
            die("Houve um erro na tentativa de cadastrar a empresa. Erro gerado na classe ".__CLASS__);
        }

    }

    /**
     * @return string contendo o insert contendo as mascaras para inserção na tabela
     */
    private function prepareSql() {
        return "INSERT INTO {$this->tipoCorrespondencia->getTable()}"
            . " (descricao)"
            . " VALUES (:descricao)";
    }

}