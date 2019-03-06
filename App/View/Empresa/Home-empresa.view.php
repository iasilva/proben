<?php



require_once DIR . '/App/View/includes/head.php';/*Inclui o início (tags html) e o head do website*/
require_once DIR . '/App/View/includes/header.php';/*Inclui o header do website*/
?>
    <main class="container"><!--Início do conteúdo específico da View em questão -->

        <header>
            <h3 class="text-info">Preencha os dados da empresa</h3>
        </header>

        <div class="row">
            <div class="col-12">
                <form action="./empresa/cadastrar" METHOD="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row linha-form">
                                <div class="col-7"><input id="nome_empresa" name="nome_empresa"
                                                          class="form-control form-control-sm"
                                                          PLACEHOLDER="Nome da empresa"></div>
                                <div class="col-5"><input id="email_empresa" name="email_empresa"
                                                          class="form-control form-control-sm" PLACEHOLDER="Email">
                                </div>
                            </div>

                            <div class="row linha-form">
                                <div class="col-9"><input id="endereco_empresa" name="endereco_empresa"
                                                          class="form-control form-control-sm" PLACEHOLDER="Logradouro">
                                </div>
                                <div class="col-3"><input id="num_endereco_empresa" name="num_endereco_empresa"
                                                          class="form-control form-control-sm" PLACEHOLDER="Número">
                                </div>
                            </div>
                            <div class="row linha-form">
                                <div class="col-6"><input id="bairro_empresa" name="bairro_empresa"
                                                          class="form-control form-control-sm" PLACEHOLDER="Bairro">
                                </div>
                                <div class="col-6"><input id="cidade_empresa" name="cidade_empresa"
                                                          class="form-control form-control-sm" PLACEHOLDER="Cidade">
                                </div>
                            </div>
                            <div class="row linha-form">
                                <div class="col-6">
                                    <select name="uf_empresa" id="uf_empresa" class="form-control form-control-sm">
                                        <option value="" selected>Selecione o Estado</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <input id="cep_empresa" name="cep_empresa" class="form-control form-control-sm" PLACEHOLDER="CEP">
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
