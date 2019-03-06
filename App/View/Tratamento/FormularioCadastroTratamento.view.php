<?php


require_once DIR . '/App/View/includes/head.php';/*Inclui o início (tags html) e o head do website*/
require_once DIR . '/App/View/includes/header.php';/*Inclui o header do website*/
?>
    <main class="container"><!--Início do conteúdo específico da View em questão -->

        <header>
            <h3 class="text-info">Forma de tratamento</h3>
        </header>

        <div class="row">
            <div class="col-12"><!--COLUNA MASTER-->
                <form action="./tratamento/cadastrar" METHOD="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row linha-form">
                                <div class="col-3">
                                    <input id="sigla_tratamento" name="sigla_tratamento" class="form-control form-control-sm" PLACEHOLDER="Sigla">
                                </div>
                                <div class="col-7 offset-2">
                                    <input id="extenso_tratamento" name="extenso_tratamento" class="form-control form-control-sm" PLACEHOLDER="Tratamento por extenso">
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


                    <button type="submit" class="btn btn-sm btn-info">Salvar</button>
                </form>
            </div>

        </div>


    </main><!--Fim do conteúdo especípico da View em questão -->
<?php
require_once DIR . '/App/View/includes/footer.php'; /*Inclui o Footer do website*/
