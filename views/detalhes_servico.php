<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/servico.php';

try {
    $id = $_GET['id'];
    $trabaio = Servico::listarPorId($id);
} catch (PDOException $th) {
    echo $th->getMessage();
}

?>



<section class="corpo">
    <main id="maine">
        <div class="esquerdo">
            <img src="data:image;base64,<?= base64_encode($trabaio['foto_servico']) ?>" alt="" width="100%">
        </div>
        <div class="direito">
            <h1>Tipo de Serviço: <?= $trabaio['nome_servico'] ?></h1>
            <p class="nego">SeFaster: <?= $trabaio['nome_usuario'] ?></p>
            <p class="nego">Email: <?= $trabaio['email'] ?></p>
            <p class="nego">Contatos: <?= $trabaio['telefone'] ?></p>
            <p class="nego">Redes Sociais: <?= $trabaio['site_usuario'] ?></p>

            <p><?= $trabaio['descricao'] ?></p>
        </div>
    </main>
</section>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>