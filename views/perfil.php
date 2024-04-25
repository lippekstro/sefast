<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php'
?>

<style>
    .titulo {
        margin-left: 40%;
        margin-top: 500px;
    }

    .botoes {
        grid-area: botoes;
    }

    .info-tab {
        grid-area: info-tab;
        border-left: 2px solid rgb(99, 23, 99);
        margin-left: 5px;
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
        padding: 12px;
        font-size: 15px;
        transition: ease 0.1s;

    }

    .titulo {
        padding: 20px;
    }

    .margin {
        margin: 100px;
    }
</style>

<div class="margin">

    <h1 class="tíluto">Perfil do Usuário</h1>

    <div class="User">

        <img src="data:image;base64,<?= base64_encode($_SESSION['foto']) ?>" alt="Foto Do Perfil" title="Foto de Perfil" width="150px">

        <h2><?= $_SESSION['nome_usuario'] ?></h2>
        <div>
            <hr color="purple">
        </div>

    </div>
    <div class="btnetab">
        <div class="Botoes">
            <a class="btn" href="/sefast/views/editar_perfil.php">Editar perfil</a>
            <a href="/sefast/views/cadastro_servico.php" class="btn">Adicionar Serviço</a>
            <a href="/sefast/views/servico_edt_form.php" class="btn">Editar Serviço</a>
            <a href="/sefast/controllers/servico_del_controller.php" class="btn">Excluir Serviço</a>
            <a class="btn" href="/sefast/views/admin/servicos_gerenciar.php">Gerenciar Serviços</a>
            <a href="/sefast/views/admin/categorias_gerenciar.php" class="btn">Gerenciar Categorias</a>
            <a class="btn" href="/sefast/controllers/logout_controller.php">Terminar seção</a>
        </div>
        <div class="info-tab">
            <h2>ºInformaçoes Pessoais:</h2>
            <p>°Nome:
            <p style="text-decoration: underline;"><?= $_SESSION['nome_usuario'] ?></p>
            </p>
            <p>°Telefone:
            <p style="text-decoration: underline;"><?= $_SESSION['telefone'] ?></p>
            </p>
            <p>°Email:
            <p style="text-decoration: underline;"><?= $_SESSION['email'] ?></p>
            </p>
        </div>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>