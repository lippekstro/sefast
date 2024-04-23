<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php'
?>

<section>
    <form action="/sefast/controllers/categoria_add_controller.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome da Categoria</label>
        <input type="text" name="nome" id="nome">

        <label for="foto">Imagem para a Categoria</label>
        <input type="file" name="foto" id="foto">

        <button type="submit" class="btn btn-primary">cadastrar</button>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>