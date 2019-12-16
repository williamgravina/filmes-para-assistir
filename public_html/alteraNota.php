<?php 

    require_once '_cabecalho.php';
    require_once '_menu.php';
    require_once '_conecta.php';
    require_once 'funcoes.php';
     $id = $_GET['id'];
assistirFilme($conexao, $id);
header("Location: index.php?assistido=true");
die();         