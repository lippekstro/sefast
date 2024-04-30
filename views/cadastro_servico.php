<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/categoria.php';
try {
    $lista=Categoria::listar();

} catch (\Throwable $th) {
    //throw $th;
}

?>

<section id="coisas">
    <div class="infos">
        <form class="formulario" action="/sefast/controllers/servico_add_controller.php" method="post" enctype="multipart/form-data">

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
                    <?php foreach($lista as $categoria) :?><option value="<?= $categoria['id_categoria']?>"><?= $categoria['nome_categoria'] ?></option> <?php endforeach ;?>
                </select>
            </div>

            <div class="categ">
                <label for="foto">Imagem:</label>
                <input type="file" name="foto" id="foto">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>