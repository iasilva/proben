<?php

use App\Config\IncludeHtml as inc;

require_once DIR . '/App/View/includes/head.php';/*Inclui o início (tags html) e o head do website*/
require_once DIR . '/App/View/includes/header.php';/*Inclui o header do website*/
?>
    <main class="container"><!--Início do conteúdo específico da View em questão -->
        <div class="row">

            <div class="col-md-4">
                <div class="card card-home" style="width: 20rem;">
                    <img class="card-img-top img-fluid"src="/ui/images/carta-img.jpg" alt="Imagem ícone cartas">
                    <div class="card-block">
                        <h4 class="card-title">Geração de cartas</h4>
                        <p class="card-text">
                           Geração de cartas básicas, por exemplo convocações para perícia e alguns despachos chapa batida.
                        </p>
                        <a href="./carta"><div class="btn btn-primary"> Gerar carta</div></a>
                    </div>
                </div>
            </div> 

        </div>
    </main><!--Fim do conteúdo especípico da View em questão -->
<?php
require_once DIR . '/App/View/includes/footer.php'; /*Inclui o Footer do website*/
