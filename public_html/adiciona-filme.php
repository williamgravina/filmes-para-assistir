<?php
require_once ("_cabecalho.php");
require_once '_conecta.php';
require_once 'funcoes.php';
          
$nomeDoFilme = $_POST["nomeDoFilme"];
$categoria = $_POST["categoria"];
$prioridade = $_POST["prioridade"];
$plataforma = $_POST["plataforma"];

if(insereFilme($conexao, $nomeDoFilme, $categoria, $prioridade, $plataforma)){?>
           <p class="text-success text-centro">O filme <?= $nomeDoFilme ?> foi adicionado com sucesso</p>
         <?php } else { 
             $msg = mysqli_error($conexao);
             ?> <p class="text-danger">O filme <?= $nomeDoFilme ?> não foi adicionado: <?= $msg?></p>
           <?php }
header("Location: pageFilmes.php?adicionado=true");
die();            
 

