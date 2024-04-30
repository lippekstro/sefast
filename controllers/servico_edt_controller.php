<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/servico.php';

try {
    $id = $_POST['id'];
    $servico = $_POST['servico'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    if (!empty($_FILES['foto']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['foto']['tmp_name']);
    }

    $serv = new Servico($id);

    $serv->nome_servico = $servico;
    $serv->descricao = $descricao;
    $serv->categoria = $categoria;
    if (isset($imagem)) {
        $serv->foto_servico = $imagem;
    } else {
        $serv->foto_servico = $serv->foto_servico;
    }

    $serv->atualizar();
    header('Location: /sefast/views/perfil.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}
