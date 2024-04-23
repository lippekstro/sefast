<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/categoria.php';

try {
    $id = $_GET['id'];
    $categoria = new Categoria($id);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section>
    <form action="/sefast/controllers/categoria_edt_controller.php" method="post" enctype="multipart/form-data">        
        <label for="nome">Nome da Categoria</label>
        <input type="text" name="nome" id="nome" value="<?= $categoria->nome_categoria ?>">

        <label for="foto">Imagem para a Categoria</label>
        <input type="file" name="foto" id="foto">

        <input type="hidden" name="id" value="<?= $categoria->id_categoria ?>">

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>