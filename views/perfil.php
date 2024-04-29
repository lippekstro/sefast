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

<style>
    .titulo {
        margin-left: 40%;
        margin-top: 500px;
    }

    .botoes {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .info-tab {
        grid-area: info-tab;
        border-left: 2px solid rgb(99, 23, 99);
        margin-left: 5px;
        padding: 1rem;
    }

    .btnetab {
        display: grid;
        grid-template-areas: "botoes info-tab";
    }

    .btn {
        border: 2px solid black;
        background-color: #402978;
        float: inline-start;
        margin: 1rem;
        padding: 10px;
        color: white;
        text-decoration: none;
        font-size: 14px;
        display: flex;
        justify-content: space-between;
    }

    .btn:hover {
        background-color: #5637a3;
        transition: ease 0.1s;

    }

    .titulo {
        padding: 20px;
    }

    .margin {
        margin: 100px;
    }

    .user {
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    #foto-do-perfil {
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }
</style>

<div class="margin">

    <div class="user">

        <img id="foto-do-perfil" src="data:image;base64,<?= base64_encode($_SESSION['foto']) ?>" alt="Foto Do Perfil" title="Foto de Perfil">

        <h2><?= $_SESSION['nome_usuario'] ?></h2>




    </div>
    <hr color="purple">
    <div class="btnetab">
        <div class="botoes">
            <a class="btn" href="/sefast/views/editar_perfil.php">Editar perfil</a>

            <?php if ($_SESSION['nivel_acesso'] == 1) : ?>
                <?php if(!isset($servico['id_servico'])): ?>
                <a href="/sefast/views/cadastro_servico.php" class="btn">Adicionar Serviço</a>
                <?php else: ?>
                <a href="/sefast/views/servico_edt_form.php" class="btn">Editar Serviço</a>
                <a href="/sefast/controllers/servico_del_controller.php?id=<?= $servico['id_servico'] ?>" class="btn">Excluir Serviço</a>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ($_SESSION['nivel_acesso'] == 2) : ?>
                <a class="btn" href="/sefast/views/admin/servicos_gerenciar.php">Gerenciar Serviços</a>
                <a href="/sefast/views/admin/categorias_gerenciar.php" class="btn">Gerenciar Categorias</a>
            <?php endif; ?>


            <a class="btn" href="/sefast/controllers/logout_controller.php">Terminar seção</a>
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