$(function () {
    /*Informações básicas*/
    /*Administra o básico do modal*/
    modalPadrao=$("#modal-padrao-pagina");
    modalBody=$("#modal-padrao-pagina .modal-body");
    modalPadrao.css(
        {
            "margin-top":"10%"
        }
    )



    /*Exibe os dados*/
    modalBody.text("Uou! Como as coisas estão difícil hein.");
    modalPadrao.modal(
        {
            'show':false,
            'backdrop':true/*exibe o fundo - false não exibe e static não apaga com clique fora*/
        }
    );



});