<?php
require_once '_cabecalho.php';
require_once '_menu.php';
?>

<header>
    <h1>Lista de filmes</h1>
</header>
<div>
    <div class="adicionarFilme">
        <h2>Adicionar filme</h2>
        <form class="form-inline centro">
            <input placeholder="Nome do Filme" class="form-control camposDosFormularios" type="text">
            <select class="form-control camposDosFormularios" id="categoria">
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
            <select class="form-control camposDosFormularios" id="prioridade">
                <option selected>Prioridade</option>
                <option value="Preciso ver agora">Preciso ver agora</option>
                <option value="Alta">Alta</option>
                <option value="Média">Média</option>
                <option value="Baixa">Baixa</option>
            </select>
            <select class="form-control camposDosFormularios" id="plataforma">
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
        <table class="table tabela table-hover table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome do filme</th>
                    <th>Categoria</th>
                    <th>Prioridade</th>
                    <th>Plataforma</th>
                    <th>Quando foi adicionado</th>
                    <th>Assistiu?</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Homem de Ferro</td>
                    <td>Herois</td>
                    <td>Alta</td>
                    <td>Netflix</td>
                    <td>22/02/2019</td>
                    <td><form>
                            <button class="btn btn-light" type="submit">Assisti</button>
                        </form></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>Homem de Ferro 2</td>
                    <td>Herois</td>
                    <td>Média</td>
                    <td>Netflix</td>
                    <td>24/03/2019</td>
                    <td><form>
                            <button class="btn btn-light" type="submit">Assisti</button>
                        </form></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="filmesAssistidos">
        <h2>Filmes assistidos</h2>
        <table class="table tabela table-hover table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome do filme</th>
                    <th>Categoria</th>
                    <th>Nota</th>
                    <th>Quando foi assistido</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Homem de Ferro</td>
                    <td>Herois</td>
                    <td>5</td>
                    <td>26/02/2019</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>


<?php
require_once '_rodape.php';
