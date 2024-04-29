<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/servico.php';

try {
    $id = $_GET['id'];

    $servico = new Servico($id);

    $servico->deletar();

    header('Location: /sefast/views/admin/servicos_gerenciar.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}