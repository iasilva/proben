<!DOCTYPE html>
<html lang="pt-Br">
<head>

    <?php
    /**
     * Recupera os dados e informações constante no arquivo config.json
     */
    $configJson=json_decode(file_get_contents(DIR.'/App/Config/config.json'));
    ?>

    <!-- Required meta tags  for bootstrap-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo (isset($page_title)?$page_title:$configJson->name); ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/ui/plugins/bootstrap/css/bootstrap.min.css">
    <!--CSS local-->
    <link rel="stylesheet" href="/ui/css/base.css">
    <link rel="stylesheet" href="/ui/css/imprimecorrespondencia.css">
    <!--CSS FONT GOOGLE-->
    <link href="https://fonts.googleapis.com/css?family=Lato|Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Include stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
   </head>
