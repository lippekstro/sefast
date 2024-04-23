<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/categoria.php';

try {
    $n = $_POST['nome'];
    $f = null;

    $categoria = new Categoria();
    $categoria->nome_categoria = $n;
    $categoria->foto_categoria = $f;

    $categoria->criar();

    header('Location: /sefast/views/admin/categorias_gerenciar.php');

} catch (PDOException $e) {
    echo $e->getMessage();
}