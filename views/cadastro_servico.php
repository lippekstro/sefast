<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php'
?>

<section id="coisas">
    <div class="infos">
        <form class="formulario" action="" method="post" autocomplete="on">

            <div class="categ">
                <label for="servico">Serviço:</label>
                <input id="cadastro" type="text" name="servico" size="40">
            </div>

            <div class="categ">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="categ">
                <label for="categoria">Categoria:</label>
                <select name="categoria" id="categoria">
                    <option value=""></option>
                </select>
            </div>

            <div class="categ">
                <label for="foto">Imagem:</label>
                <input type="file" name="foto" id="foto">
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>