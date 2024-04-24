<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php'
?>

<section class="m-3">
    <img src="data:image;base64,<?= base64_encode($_SESSION['foto']) ?>" alt="" width="100px">
    <p><?= $_SESSION['email'] ?></p>
    <p><?= $_SESSION['nome_usuario'] ?></p>
</section>

<section class="m-3">
    <a href="/sefast/views/cadastro_servico.php" class="btn btn-primary">Adicionar Serviço</a>
    <a href="/sefast/views/servico_edt_form.php" class="btn btn-primary">Editar Serviço</a>
    <a href="/sefast/controllers/servico_del_controller.php" class="btn btn-primary">Excluir Serviço</a>

    <a href="/sefast/views/editar_perfil.php">Editar Perfil</a>


    <a href="/sefast/views/admin/categorias_gerenciar.php" class="btn btn-warning">Gerenciar Categorias</a>
    <a href="/sefast/views/admin/servicos_gerenciar.php" class="btn btn-warning">Gerenciar Serviços</a>

    <a href="/sefast/controllers/logout_controller.php" class="btn btn-danger">Sair</a>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>