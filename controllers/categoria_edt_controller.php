<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/categoria.php';

try {
    $id = $_POST['id'];
    $n = $_POST['nome'];
    $f = null;

    $categoria = new Categoria($id);
    $categoria->nome_categoria = $n;
    $categoria->foto_categoria = $f;

    $categoria->atualizar();

    header('Location: /sefast/views/admin/categorias_gerenciar.php');

} catch (PDOException $e) {
    echo $e->getMessage();
}