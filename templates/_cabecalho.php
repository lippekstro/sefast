<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/sefast/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <script src="/sefast/js/bootstrap.js" defer></script>
    <link rel="stylesheet" href="/sefast/css/style.css">
    <link rel="stylesheet" href="/sefast/css/login.css">
    <link rel="stylesheet" href="/sefast/css/servicos.css">
    <link rel="stylesheet" href="/sefast/css/servicos_gerenciar.css">
    <link rel="stylesheet" href="/sefast/css/cadastro_servico.css">
    <link rel="stylesheet" href="/sefast/css/styleserv.css">
</head>

<body>
    <nav class="topnav">
        <ul>
            <li>
                <a href="/sefast/index.php">
                    <img src="/sefast/imgs/sefst2.png" alt="sefast" width="50px" height="50px">
                </a>
            </li>
            <?php if (!isset($_SESSION['id_usuario'])) : ?>
                <li class="user">
                    <a href="/sefast/views/login.php" title="login">
                        <img src="/sefast/imgs/usuario.png" alt="usuario" width="35px" height="35px">
                    </a>
                </li>
            <?php else : ?>
                <li class="user">
                    <a href="/sefast/views/perfil.php" title="perfil">
                        <img src="/sefast/imgs/person.png" alt="usuario" width="35px" height="35px">
                    </a>
                </li>
            <?php endif; ?>
            <li class="bar">
                <a href="/sefast/views/servicos.php" title="serviços">
                    <img src="/sefast/imgs/barras.png" alt="barras" width="35px" height="35px">
                </a>
            </li>
        </ul>
    </nav>
    <main>