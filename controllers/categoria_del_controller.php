<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/categoria.php';

try {
    $id = $_GET['id'];

    $categoria = new Categoria($id);

    $categoria->deletar();

    header('Location: /sefast/views/admin/categorias_gerenciar.php');

} catch (PDOException $e) {
    echo $e->getMessage();
}