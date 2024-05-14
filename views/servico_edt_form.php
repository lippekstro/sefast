<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/servico.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/categoria.php';

try {
    $servico = Servico::listarPorIdUsuario($_SESSION['id_usuario']);
    $categorias = Categoria::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section id="coisas">
    <div class="infos">
        <form class="formulario" action="/sefast/controllers/servico_edt_controller.php" method="post" autocomplete="on" enctype="multipart/form-data">

            <div class="categ">
                <label for="servico">Serviço:</label>
                <input id="cadastro" type="text" name="servico" value="<?= $servico['nome_servico'] ?>" required>
            </div>

            <div class="categ">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" cols="30" rows="10"><?= $servico['descricao'] ?></textarea>
            </div>

            <div class="categ">
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria">
                    <?php foreach($categorias as $item): ?>
                    <option value="<?= $item['id_categoria'] ?>" <?= $servico['id_categoria'] == $item['id_categoria'] ? 'selected' : '' ?>><?= $item['nome_categoria'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="categ">
                <label for="foto">Foto:</label>
                <input class="form-control" type="file" name="foto" id="foto">
            </div>

            <input type="hidden" name="id" value="<?= $servico['id_servico'] ?>">

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>