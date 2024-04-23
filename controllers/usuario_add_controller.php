<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/usuario.php';

try {
    $n = $_POST['nome'];
    $e = $_POST['email'];
    $s = $_POST['senha'];
    $s = password_hash($s, PASSWORD_DEFAULT);
    $t = $_POST['tel'];

    $usuario = new Usuario();
    $usuario->nome_usuario = $n;
    $usuario->email = $e;
    $usuario->senha = $s;
    $usuario->telefone = $t;

    $usuario->criar();

    header('Location: /sefast/views/login.php');

} catch (PDOException $e) {
    echo $e->getMessage();
}