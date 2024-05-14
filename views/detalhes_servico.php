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



<section class="d-flex justify-content-center align-items-center m-3">
    <main id="maine">
        <div class="esquerdo">
            <img src="data:image;base64,<?= base64_encode($trabaio['foto_servico']) ?>" alt="" width="100%">
        </div>
        <div class="direito">
            <h1>Tipo de Serviço: <?= $trabaio['nome_servico'] ?></h1>
            <img src="data:image;base64,<?= base64_encode($trabaio['foto_usuario']) ?>" alt="" width="100px" height="100px">
            <p class="nego">SeFaster: <?= $trabaio['nome_usuario'] ?></p>
            <p class="nego">Email: <a href="mailto:<?= $trabaio['email'] ?>"><?= $trabaio['email'] ?></a></p>
            <p class="nego">Contatos: <a href="tel:<?= $trabaio['telefone'] ?>"><?= $trabaio['telefone'] ?></a></p>
            <p class="nego">Redes Sociais: <a href="https://<?= $trabaio['site_usuario'] ?>" target="_blank"><?= $trabaio['site_usuario'] ?></a></p>

            <p><?= $trabaio['descricao'] ?></p>
        </div>
    </main>
</section>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>