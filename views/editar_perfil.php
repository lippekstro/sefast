<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/usuario.php';

try {
    $qualquer = new Usuario($_SESSION['id_usuario']);
} catch (PDOException $E) {
echo $E->getMessage();
}

?>

<div class="perfil m-3 d-flex justify-content-center">
    <form action="/sefast/controllers/usuario_editar_controller.php" method="post" enctype="multipart/form-data" >
        <div class="my-3">
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" id="nome" value="<?= $qualquer->nome_usuario ?>" name="nome" placeholder="Nome Completo" required>
        </div>

        <div class="my-3">
            <label for="email">Email:</label>
            <input class="form-control" value="<?=$qualquer->email?>" type="email" id="email" name="email" placeholder="exemplo@gmail.com" required>
        </div>

        <div class="my-3">
            <label for="senha">Senha:</label>
            <input class="form-control" type="password" id="senha" name="senha" placeholder="Senha">
        </div>

        <div class="my-3">
            <label for="telefone">Telefone:</label>
            <input class="form-control" type="tel" value="<?=$qualquer->telefone?>" id="telefone" name="telefone" placeholder="(99)99999-9999">
        </div>

        <div class="my-3">
            <label for="site">Site:</label>
            <input class="form-control" type="text" id="site" value="<?=$qualquer->site?>" name="site" placeholder="www.meusite.com">
        </div>

        <div class="my-3">
            <label for="foto">Foto:</label>
            <input class="form-control" type="file" id="foto" name="foto">
        </div>


<input type="hidden" name="id" value="<?=$qualquer->id_usuario?>" >

        <button type="submit" class="btn btn-success" value="Salvar Alterações">
            Salvar Alterações
        </button>

    </form>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>