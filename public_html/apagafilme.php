<?php 

    require_once '_cabecalho.php';
    require_once '_menu.php';
    require_once '_conecta.php';
    require_once 'funcoes.php';
     $id = $_GET['id'];
     apagarFilme($conexao, $id);
header("Location: pageFilmes.php?apagado=true");
die();         