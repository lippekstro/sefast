<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/servico.php';

if($_SESSION['nivel_acesso'] == 1){
    header('Location: /sefast/views/perfil.php');
}

try {
    $lista = Servico::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section>
    <div class="roda">
        <h1>serviços cadastrados</h1>
    </div>

    <div class="container-servicos">
        <?php foreach ($lista as $item) : ?>
            <div id="botao1">
                <a href="/sefast/views/detalhes_servico.php?id=<?= $item['id_servico'] ?>" class="bot"><?= $item['nome_servico'] ?></a>
                <a href="/sefast/controllers/servico_del_controller.php?id=<?= $item['id_servico'] ?>" title="apagar">
                    <span class="material-symbols-outlined">
                        delete
                    </span>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>