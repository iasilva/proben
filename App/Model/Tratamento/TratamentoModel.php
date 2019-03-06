<?php

namespace App\Model\Tratamento;
/**
 * Class TratamentoModel
 * @package App\Model\Tratamento
 * Responsável pela lógica vinculada a classe tratamento. Relaciona-se a formas de tratamento dos receptores.
 */

class TratamentoModel
{
    private $table="tratamento";
    private $id;
    private $sigla;
    private $extenso;

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param string $table
     * @return TipoCorrespondenciaModel
     */
    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return TipoCorrespondenciaModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * @param mixed $sigla
     * @return TratamentoModel
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtenso()
    {
        return $this->extenso;
    }

    /**
     * @param mixed $extenso
     * @return TratamentoModel
     */
    public function setExtenso($extenso)
    {
        $this->extenso = $extenso;
        return $this;
    }
    public function save(){
      $tratamento= new \App\Model\Tratamento\CreateTratamento();
      return $tratamento->save($this);
    }

}