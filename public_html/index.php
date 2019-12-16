<?php
require_once '_cabecalho.php';
require_once '_menu.php';
require_once '_conecta.php';
require_once 'funcoes.php';
?>

<header>
    <h1>Lista de filmes</h1>
</header>
<div>
    <?php if (array_key_exists("adicionado", $_GET) && $_GET["adicionado"] == true) { ?>
    <p class="alert-success text-centro">Filme adicionado com sucesso</p>
    <?php } elseif (array_key_exists("assistido", $_GET) && $_GET["assistido"] == true) { ?> 
    <p class="alert-success text-centro">Filme assistido</p>
    <?php }
    ?>

    <div class="adicionarFilme">
        <h2>Adicionar filme</h2>
        <form action="adiciona-filme.php" method="post" class="form-inline centro">
            <input name="nomeDoFilme" placeholder="Nome do Filme" class="form-control camposDosFormularios" type="text">
            <select name="categoria" class="form-control camposDosFormularios" id="categoria">  
                <option selected>Categoria</option>
                <option value="Ação e aventura">Ação e aventura</option>
                <option value="Terror">Terror</option>
                <option value="Comédia">Comédia</option>
                <option value="Ficção cientifica e fantasia">Ficção cientifica e fantasia</option>
                <option value="Cliche">Cliche</option>
                <option value="Anime">Anime</option>
                <option value="Românticos">Românticos</option>
                <option value="Drama">Drama</option>
                <option value="Documentários">Documentários</option>
                <option value="Herois">Herois</option>
            </select>
            <select name="prioridade" class="form-control camposDosFormularios" id="prioridade">
                <option selected>Prioridade</option>
                <option value="Preciso ver agora">Preciso ver agora</option>
                <option value="Alta">Alta</option>
                <option value="Média">Média</option>
                <option value="Baixa">Baixa</option>
            </select>
            <select name="plataforma" class="form-control camposDosFormularios" id="plataforma">
                <option selected>Plataforma</option>
                <option value="Netflix">Netflix</option>
                <option value="Torrent - Baixei">Torrent - Baixei</option>
                <option value="Torrent - Preciso baixar">Torrent - Preciso baixar</option>
            </select>
            <button type="submit" class="btn btn-success camposDosFormularios">Adicionar</button>
        </form>
    </div>

    <div class="filmesParaAssistir">
        <h2>Filmes para assistir</h2>
        <form action="notaDoFilme.php">
            <table class="table tabela table-hover table-dark">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Nome do filme</th>
                        <th>Categoria</th>
                        <th>Prioridade</th>
                        <th>Plataforma</th>
                        <th>Assistiu?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $filmes = listaFilmes($conexao);
                    foreach ($filmes as $filme) :
                    ?>
                    <tr>
                        <td><?= $filme['id'] ?></td>
                        <td><?= $filme['nomeDoFilme'] ?></td>
                        <td><?= $filme['categoria'] ?></td>
                        <td><?= $filme['prioridade'] ?></td>
                        <td><?= $filme['plataforma'] ?></td>
                        <td>
                            <form action="notaDoFilme.php">
                                <input type="hidden" name="nomeDoFilme" value="<?= $filme['nomeDoFilme'] ?>">
                                <input type="hidden" name="id" value="<?= $filme['id'] ?>">
                                <button class="btn btn-light">Assisti</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </form>
    </div>

    <div class="filmesAssistidos">
        <h2>Filmes assistidos</h2>
        <table class="table tabela table-hover table-dark">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nome do filme</th>
                    <th>Categoria</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $filmes = listaFilmesAssistidos($conexao);
                foreach ($filmes as $filme) :
                ?>
                <tr>
                    <td><?= $filme['id'] ?></td>
                    <td><?= $filme['nomeDoFilme'] ?></td>
                    <td><?= $filme['categoria'] ?></td>
                </tr>
                <?php
                    endforeach;
                    ?>
            </tbody>

        </table>
    </div>

</div>


<?php
require_once '_rodape.php';
