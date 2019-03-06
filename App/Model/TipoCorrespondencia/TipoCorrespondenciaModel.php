<?php
/**
 * Created by PhpStorm.
 * User: ivana
 * Date: 04/03/2019
 * Time: 15:33
 */

namespace App\Model\TipoCorrespondencia;


class TipoCorrespondenciaModel
{
    private $table="tipo_correspondencia";
    private $id;
    private $descricao;

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
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     * @return TipoCorrespondenciaModel
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }
    public function save(){
      $newTipo=  new \App\Model\TipoCorrespondencia\CreateTipoCorrespondencia();
      $newTipo->save($this);
    }

}