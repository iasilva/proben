<?php
use App\Config\IncludeHtml as inc;
require_once DIR.'/App/View/includes/head.php';/*Inclui o início (tags html) e o head do website*/
require_once DIR.'/App/View/includes/header.php';/*Inclui o header do website*/
?>
    <main class="container"><!--Início do conteúdo específico da View em questão -->

        <header>
            <h2 class="text-info">Gerador de cartas e ofícios</h2>
        </header>

        <div class="row">
            <div class="col-12">
                <form action="./carta/processa" METHOD="post">
                    <div class="row">
                        <div class="col-md-4">

                            <!--CHECKBOX DO TIPO DE CORRESPONDÊNCIA-->
                            <div id="bg-form-check-group">
                                <div class="form-check-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tipo-correspondencia" id="tipo-correspondencia1" value="opcao1" checked>
                                        <label class="form-check-label" for="tipo-correspondencia1">
                                            Ofício
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tipo-correspondencia" id="tipo-correspondencia2" value="opcao2">
                                        <label class="form-check-label" for="tipo-correspondencia2">
                                            Carta
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="destinatario">Destinatário</label>
                                <select name="destinatario-select" id="destinatario" class="form-control">
                                    <option value="0">1ª Vara de São Gabriel da Palha</option>
                                    <option value="1">Justiça Federal Colatina</option>
                                    <option value="2">2ª Vara de São Gabriel da Palha</option>
                                    <option value="3">Defensoria Pública de São Gabriel da Palha</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="titular">Titular</label>
                                <input  id="titular-ofc" name="titular-ofc" class="form-control" PLACEHOLDER="Nome">
                            </div>
                            <div class="form-group">
                                <label for="refencia">Ref.: Ofício/Processo</label>
                                <input  id="referencia-ofc" name="referencia-ofc" class="form-control" PLACEHOLDER="001/2018 - 2018.001...">
                            </div>
                        </div>
                            <!--Segunda Coluna do formulário-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="num-ofc">Número do documento</label>
                                <input  id="num-ofc" name="num-ofc" class="form-control input" style="width: 50%"  PLACEHOLDER="xxx/aaaa">
                            </div>

                        </div>
                        <!--terceira Coluna do formulário-->
                        <div class="col-md-4">
                            <p class=" alert alert-info">
                                Os dados serão exibidos aqui puxando as informações do Banco de dados
                            </p>
                            <span class="font-weight-bold">Endereço:</span>
                            <div class="font-italic text-muted">
                                Rua Don Daniel Comboni,101<br>
                                Centro, São Gabriel da Palha - ES<br>
                                CEP: 29780-000
                            </div>

                        </div>
                    </div>




                    <button type="submit">Enviar</button>
                </form>
            </div>

        </div>



    </main><!--Fim do conteúdo especípico da View em questão -->
<?php
require_once DIR.'/App/View/includes/footer.php'; /*Inclui o Footer do website*/
