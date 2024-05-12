<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/categoria.php';

try {
    $lista = Categoria::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section class="servicos">
    <table>
        <tr>
            <th>Categoria</th>
            <th colspan="2">
                <a href="/sefast/views/admin/categoria_add_form.php">Adicionar</a>
            </th>
        </tr>

        <?php foreach ($lista as $c) : ?>
            <tr>
                <td><?= $c['nome_categoria'] ?></td>
                <td>
                    <a href="/sefast/views/admin/categoria_edt_form.php?id=<?= $c['id_categoria'] ?>">Editar</a>
                </td>
                <td>
                    <a href="/sefast/controllers/categoria_del_controller.php?id=<?= $c['id_categoria'] ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>