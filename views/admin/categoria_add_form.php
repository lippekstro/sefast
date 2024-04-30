<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php'
?>

<section  class="d-flex justify-content-center align-items-center m-3">
    <form action="/sefast/controllers/categoria_add_controller.php" method="post" enctype="multipart/form-data">
        <div class="form-group my-3">
            <label for="nome">Nome da Categoria</label>
            <input class="form-control" type="text" name="nome" id="nome">
        </div>
        <div class="form-group my-3">
            <label for="foto">Imagem para a Categoria</label>
            <input class="form-control" type="file" name="foto" id="foto">
        </div>
        <div class="form-group my-3">
            <button type="submit" class="btn btn-primary">cadastrar</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>