<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/servico.php';

try {
    $lista = Servico::listar();
} catch (\Throwable $th) {
    //throw $th;
}

?>

<section class="servicos">
    <table>
        <tbody>
            <tr>
                <th>Nome Atividade</th>

                <th>Descrição</th>
            </tr>

            <?php foreach ($lista as $servico) : ?> <tr>
                    <td> <a href="/sefast/views/detalhes_servico.php?id=<?= $servico['id_servico']?>"><?= $servico['nome_servico'] ?></a> </td>

                    <td><?= $servico['descricao'] ?></td>
                </tr> <?php endforeach; ?>

        </tbody>

    </table>
</section>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>