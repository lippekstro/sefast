<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/usuario.php';

try {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $site = $_POST["site"];
    if (!empty($_POST["senha"])) {
        $senha = $_POST["senha"];
        $senha = password_hash($senha, PASSWORD_DEFAULT);
    }


    if (!empty($_FILES['foto']['tmp_name'])) {
        $foto = file_get_contents($_FILES['foto']['tmp_name']);
    }

    $copia = new Usuario($id);
    $copia->nome_usuario = $nome;
    $copia->email = $email;
    $copia->telefone = $telefone;
    $copia->site = $site;

    if (isset($senha)) {
        $copia->senha = $senha;
    } else {
        $copia->senha = $copia->senha;
    }

    if ($foto) {
        $copia->foto = $foto;
    } else {
        $copia->foto = $copia->foto;
    }

    $copia->atualizar();

    session_start();
    $_SESSION['nome_usuario'] = $copia->nome_usuario;
    $_SESSION['email'] = $copia->email;
    $_SESSION['foto'] = $copia->foto;
    $_SESSION['telefone'] = $copia->telefone;
    


    header('Location: /sefast/views/perfil.php');
} catch (\Throwable $th) {
    //throw $th;
}
