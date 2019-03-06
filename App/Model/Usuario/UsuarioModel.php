<?php

class UsuarioModel {
    private $id;
    private $tipo_usuario_id;
    private $pessoa_id;
    private $email;
    private $senha;
    private $chave_recuperacao;
    private $validade_chave;
    private $created_at;
    
    

    
    
    
    
    
    
    
    
    
    
//Seção de GETTER e SETTERS sa Classe    
    function getId() {
        return $this->id;
    }

    function getTipo_usuario_id() {
        return $this->tipo_usuario_id;
    }

    function getPessoa_id() {
        return $this->pessoa_id;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getChave_recuperacao() {
        return $this->chave_recuperacao;
    }

    function getValidade_chave() {
        return $this->validade_chave;
    }

    function getCreated_at() {
        return $this->created_at;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTipo_usuario_id($tipo_usuario_id) {
        $this->tipo_usuario_id = $tipo_usuario_id;
    }

    function setPessoa_id($pessoa_id) {
        $this->pessoa_id = $pessoa_id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setChave_recuperacao($chave_recuperacao) {
        $this->chave_recuperacao = $chave_recuperacao;
    }

    function setValidade_chave($validade_chave) {
        $this->validade_chave = $validade_chave;
    }

    function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }


}
