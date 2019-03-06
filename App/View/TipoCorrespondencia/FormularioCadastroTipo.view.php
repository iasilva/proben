<?php


require_once DIR . '/App/View/includes/head.php';/*Inclui o início (tags html) e o head do website*/
require_once DIR . '/App/View/includes/header.php';/*Inclui o header do website*/
?>
    <main class="container"><!--Início do conteúdo específico da View em questão -->

        <header>
            <h3 class="text-info">Preencha o formulário</h3>
        </header>

        <div class="row">
            <div class="col-12"><!--COLUNA MASTER-->
                <form action="./tcorrespondencia/cadastrar" METHOD="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row linha-form">
                                <div class="col-7">
                                    <input id="tipo_correspondencia_descricao" name="tipo_correspondencia_descricao" class="form-control form-control-sm" PLACEHOLDER="Tipo de correspondência">
                                </div>

                            </div>
                        </div>



                        <!--Segunda Coluna do formulário-->
                        <div class="col-md-3">


                        </div>
                        <!--terceira Coluna do formulário-->
                        <div class="col-md-3">


                        </div>
                    </div>


                    <button type="submit" class="btn btn-sm btn-info">Enviar</button>
                </form>
            </div>

        </div>


    </main><!--Fim do conteúdo especípico da View em questão -->
<?php
require_once DIR . '/App/View/includes/footer.php'; /*Inclui o Footer do website*/
