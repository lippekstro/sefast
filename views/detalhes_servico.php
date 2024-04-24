<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/servico.php';

try {
    $id = $_GET['id'];
    $trabaio = Servico::listarPorId($id);
} catch (PDOException $th) {
    echo $th->getMessage();
}

?>

<section class="m-3">
    <p><?= $trabaio['nome_servico'] ?></p>
    <p><?= $trabaio['descricao'] ?></p>
    <img src="data:image;base64,<?= base64_encode($trabaio['foto_servico']) ?>" alt="" width="100px">
    <p><?= $trabaio['nome_usuario'] ?></p>
    <p><?= $trabaio['site_usuario'] ?></p>
    <p><?= $trabaio['telefone'] ?></p>
    <p><?= $trabaio['email'] ?></p>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>