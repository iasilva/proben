<?php

/**
 * Dados de configuração do banco de dados
 */
$database=[
    /*Aqui vai todas as configurações de banco de dados relacionado ao ambiente de desenvolvimento*/
    "desenvolvimento"=>[
        'system'=>'mysql',
        'name'=>'proben',
        'host'=>'localhost',
        'user'=>'root',
        'pass'=>''
    ],
    /*Aqui vai todas as configurações de banco de dados relacionado ao ambiente de produção*/
    "producao"=>[
        'system'=>'mysql',
        'name'=>'',
        'host'=>'',//Preencher antes da publicação
        'user'=>'',//Preencher antes da publicação
        'pass'=>''//Preencher antes da publicação
    ]
];
