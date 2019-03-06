<?php

use App\Config\IncludeHtml as inc;

require_once DIR . '/App/View/includes/head.php'; /* Inclui o início (tags html) e o head do website */
require_once DIR . '/App/View/includes/header.php'; /* Inclui o header do website */
require_once DIR . '/App/View/Usuario/menu-usuario.php'; /* Inclui o Menu Usuário */
?>

<main class="container" id="cadastro-usuario"><!--Início do conteúdo específico da View em questão -->
    <div class="row">
        
        <div class="col-md-4">
            
            <form name="cadastro-de-usuario">
                
                <div class="form-group">
                    <label for="nome-usuario">Nome <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nome-usuario">
                </div>
                
                <div class="form-group">
                    <label for="sobrenome-usuario">Sobrenome<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="sobrenome-usuario">
                </div>
                
                <div class="form-group">
                    <label for="email">Email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email-usuario">
                </div>
                
                <div class="form-group">
                    <label for="Tipo-de-usuario">Tipo<span class="text-danger">*</span></label>
                    <select id="tipo-usuario" class="form-control">                         
                        <option>Master</option>
                        <option selected="">Cliente</option>
                        <option>Operador</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="btn btn-info">Cadastrar<div>
                </div>
                
            </form>
            
        </div>
        
    </div>  

</main><!--Fim do conteúdo especípico da View em questão -->
<?php
require_once DIR . '/App/View/includes/footer.php'; /*Inclui o Footer do website*/
