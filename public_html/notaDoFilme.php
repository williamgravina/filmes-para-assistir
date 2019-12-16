<?php
    require_once '_cabecalho.php';
    require_once '_menu.php';
    require_once '_conecta.php';
        
      $nomeDoFilme = $_GET['nomeDoFilme'];
?>

<form action="index.php" class="form-inline formNomeDoFilme">
    <label class="nomeDoFilme"><?=$nomeDoFilme?></label>
    <select class="form-control camposDosFormularios" id="notaDoFilme">
                <option selected>Nota do filme</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
    <button class="btn btn-light">Enviar</button>
    </form>
<?php
require_once '_rodape.php';