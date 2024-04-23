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
                <label for="endereco">Endereço:</label>
                <input id="cadastro" type="text" name="endereco" size="40">
            </div>
            <div class="categ">
                <label for="contato">Contatos:</label>
                <input id="cadastro" type="text" name="contato" size="40">
            </div>
            <div class="categ">
                <label for="social">Redes Sociais:</label>
                <input id="cadastro" type="text" name="social" size="40">
            </div>
            <div class="categ">
                <label for="descri">Descrição:</label>
                <textarea name="descri" id="" cols="30" rows="10"></textarea>
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>