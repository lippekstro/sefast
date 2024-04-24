<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/servico.php';

try {
    session_start();
    $servico = $_POST['servico'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    if (!empty($_FILES['foto']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['foto']['tmp_name']);
    }

    $serv = new Servico();

    $serv->nome_servico = $servico;
    $serv->descricao = $descricao;
    $serv->categoria = $categoria;
    if (isset($imagem)) {
        $serv->foto_servico = $imagem;
    } else {
        $serv->foto_servico = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/sefast/imgs/dummy.png');
    }
    $serv->usuario = $_SESSION['id_usuario'];
    $serv->criar();
    header('Location: /sefast/views/perfil.php');
} catch (\Throwable $th) {
    //throw $th;
}
