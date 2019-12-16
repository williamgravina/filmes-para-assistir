<?php

function listaFilmes($conexao) {
    $filmes = array();
    $query = "SELECT * FROM filmes where assistido = 'N' order by prioridade;";
    $resultado = mysqli_query($conexao, $query);
    while ($filme = mysqli_fetch_assoc($resultado)) {
        array_push($filmes, $filme);
    }
    return $filmes;
}

function insereFilme($conexao, $nomeDoFilme, $categoria, $prioridade, $plataforma) {
    $query = "INSERT INTO filmes (nomeDoFilme, categoria, prioridade, plataforma) VALUES ('{$nomeDoFilme}', '{$categoria}', '{$prioridade}','{$plataforma}');";
    return mysqli_query($conexao, $query);
}

function assistirFilme ($conexao, $id){
    $query = "update filmes set assistido = 'S' where id = '{$id}';";
    return mysqli_query($conexao, $query);
}

function listaFilmesAssistidos($conexao) {
    $filmes = array();
    $query = "SELECT * FROM filmes where assistido = 'S';";
    $resultado = mysqli_query($conexao, $query);
    while ($filme = mysqli_fetch_assoc($resultado)) {
        array_push($filmes, $filme);
    }
    return $filmes;
}

function apagarFilme ($conexao, $id){
    $query = "delete from filmes where id = '{$id}';";
    return mysqli_query($conexao, $query);
}