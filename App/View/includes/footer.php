
<script type="text/javascript" src="/ui/plugins/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/ui/plugins/tether/js/tether.min.js"></script>
<script type="text/javascript" src="/ui/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.0.0/quill.js"></script>
<script src="//cdn.quilljs.com/1.0.0/quill.min.js"></script>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!--Scripts autorais-->
<!--Modal-->
<script type="text/javascript" src="/ui/script/modal.js"></script>
<!--scripts de teste-->
<script type="text/javascript" src="/ui/script/teste.js"></script>

</body>
<footer class="main-footer clearfix">

</footer>


<!--Modal padrão para chamado na página-->
<div class="modal" id="modal-padrao-pagina">

    <div class="modal-dialog" role="document" aria-labelledby="Mensagem de <? $configJson->nome /*Recupera essa variável incluído em head.php*/ ?>">
        <div class="modal-content">
            <div class="modal-body">
                <!--Mensagem incluída por javascript-->
            </div>
        </div>
    </div>
</div>
</html>