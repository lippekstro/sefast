<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/servico.php';

if (!isset($_SESSION['id_usuario'])) {
    header('Location: /sefast/views/login.php');
}

if($_SESSION['nivel_acesso'] == 1){
    try {
        $servico = Servico::listarPorIdUsuario($_SESSION['id_usuario']);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


?>

<div class="margin">

    <div class="user">

        <img id="foto-do-perfil" src="data:image;base64,<?= base64_encode($_SESSION['foto']) ?>" alt="Foto Do Perfil" title="Foto de Perfil">

        <h2><?= $_SESSION['nome_usuario'] ?></h2>




    </div>
    <hr color="purple">
    <div class="btnetab">
        <div class="botoes">
            <a class="btn btn-primary m-3" href="/sefast/views/editar_perfil.php">Editar perfil</a>

            <?php if ($_SESSION['nivel_acesso'] == 1) : ?>
                <?php if(!isset($servico['id_servico'])): ?>
                <a href="/sefast/views/cadastro_servico.php" class="btn btn-primary m-3">Adicionar Serviço</a>
                <?php else: ?>
                <a href="/sefast/views/servico_edt_form.php" class="btn btn-primary m-3">Editar Serviço</a>
                <a href="/sefast/controllers/servico_del_controller.php?id=<?= $servico['id_servico'] ?>" class="btn btn-primary m-3">Excluir Serviço</a>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ($_SESSION['nivel_acesso'] == 2) : ?>
                <a class="btn btn-primary m-3" href="/sefast/views/admin/servicos_gerenciar.php">Gerenciar Serviços</a>
                <a href="/sefast/views/admin/categorias_gerenciar.php" class="btn btn-primary m-3">Gerenciar Categorias</a>
            <?php endif; ?>


            <a class="btn btn-primary m-3" href="/sefast/controllers/logout_controller.php">Terminar seção</a>
        </div>
        <div class="info-tab">
            <h2>Informaçoes Pessoais:</h2>
            <p>Nome: <?= $_SESSION['nome_usuario'] ?></p>
            <p>Telefone: <?= $_SESSION['telefone'] ?></p>
            <p>Email: <?= $_SESSION['email'] ?></p>
        </div>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>