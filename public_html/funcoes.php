<?php

function listaFilmes($conexao) {
    $filmes = array();
    $query = "SELECT * FROM filmes;";
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