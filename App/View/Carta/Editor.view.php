<?php

use App\Config\IncludeHtml as inc;

require_once DIR . '/App/View/includes/head.php';/*Inclui o início (tags html) e o head do website*/
require_once DIR . '/App/View/includes/header.php';/*Inclui o header do website*/
?>
<main class="container clearfix"><!--Início do conteúdo específico da View em questão -->

    <header>
        <h3 class="text-info" style="margin-bottom: 0">Editor</h3>
        <p><span class="text-muted">Os dados de cabeçalho serão gerados automaticamente.</span></p>
    </header>

    <div class="row ">
        <div class="col-md-8 offset-2">
            <p>Excelentíssimo(a) Juíz(a).</p>
            <div id="editor">
                <p>Em atendimento ao solicitado por vossa excelência.</p>
                <p>Encaminhamos anexo todos os dados disponíveis no CNIS, para extração por esse juízo das informações
                    necessárias .</p>

            </div>
            Respeitosamente,
            <div>
                <button id="click">click</button>
            </div>
        </div>


    </div>


</main><!--Fim do conteúdo especípico da View em questão -->
<div class="clearfix"></div>
<?php
require_once DIR . '/App/View/includes/footer.php'; /*Inclui o Footer do website*/
?>
<!-- Initialize Quill editor -->
<script>
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],
        [{'header': 1}, {'header': 2}],               // custom button values
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
        [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
        [{'direction': 'rtl'}],                        // text direction

        [{'header': [1, 2, 3, 4, 5, 6, false]}],

        [{'color': []}, {'background': []}],          // dropdown with defaults from theme
        [{'font': []}],
        [{'align': []}],


    ];


    var quill = new Quill('#editor', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });
</script>