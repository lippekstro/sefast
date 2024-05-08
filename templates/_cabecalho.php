<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sefast</title>

    <link rel="shortcut icon" href="/sefast/imgs/sefst2.png" type="image/x-icon">

    <link rel="stylesheet" href="/sefast/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <script src="/sefast/js/bootstrap.js" defer></script>

    <link rel="stylesheet" href="/sefast/css/login.css">
    <link rel="stylesheet" href="/sefast/css/servicos.css">
    <link rel="stylesheet" href="/sefast/css/servicos_gerenciar.css">
    <link rel="stylesheet" href="/sefast/css/cadastro_servico.css">
    <link rel="stylesheet" href="/sefast/css/styleserv.css">
    <link rel="stylesheet" href="/sefast/css/perfil.css">
    <link rel="stylesheet" href="/sefast/css/style.css">
</head>

<body>
    <nav class="topnav">

        <a href="/sefast/index.php">
            <img src="/sefast/imgs/sefst2.png" alt="sefast" width="50px" height="50px">
        </a>

        <div>
            <?php if (!isset($_SESSION['id_usuario'])) : ?>
                <a href="/sefast/views/login.php" title="login">
                    <img src="/sefast/imgs/login.svg" alt="usuario" width="20px" height="20px">
                    <span class="nav-item">Login</span>
                </a>
            <?php else : ?>
                <a href="/sefast/views/perfil.php" title="perfil">
                    <img src="/sefast/imgs/perfil.svg" alt="usuario" width="20px" height="20px">
                    <span class="nav-item">Perfil</span>
                </a>
            <?php endif; ?>
            <a href="/sefast/views/servicos.php" title="serviços">
                <img src="/sefast/imgs/servicos.svg" alt="barras" width="20px" height="20px">
                <span class="nav-item">Serviços</span>
            </a>
        </div>



    </nav>
    <main>