<?php

use App\Config\IncludeHtml as inc;

require_once DIR . '/App/View/includes/head.php';/*Inclui o início (tags html) e o head do website*/
require_once DIR . '/App/View/includes/header.php';/*Inclui o header do website*/
use Carbon\Carbon;

?>
    <main class="container" id="main-teste"><!--Início do conteúdo específico da View em questão -->

        <header id="header-teste">
            <h3>Trabalhando com data e hora</h3>
            <p class="text-muted">Utilizando <strong>carbon</strong></p>

        </header>

        <div>
            <!--$carbon é instância de Carbon nos enviado pelo controller - -->
            <p><?php echo "<strong>Ontem foi:</strong> " . $carbon->yesterday(); ?></p>
            <p><?php echo "<strong>Hoje é:</strong> " . $carbon->today(); ?></p>
            <p><?php echo "<strong>Amanhã é:</strong> " . $carbon->tomorrow(); ?></p>

            <p><?php echo "<strong>AGORA é:</strong> " . $carbon->now(); ?></p>



            <p><?php var_dump($carbon->getLastErrors()['warning_count']); ?></p>


        </div>
       <hr>

        <?php
            $asd= new Carbon();
            $eu=$asd->create(1984,12,23,12,01,02);
            echo $eu->getTranslatedDayName(DDDD)
        ?>

        <div>

        </div>




    </main><!--Fim do conteúdo especípico da View em questão -->
<?php
require_once DIR . '/App/View/includes/footer.php'; /*Inclui o Footer do website*/
