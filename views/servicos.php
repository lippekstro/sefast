<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/servico.php';

try {
    if (isset($_GET['busca'])) {
        $termo = htmlspecialchars($_GET['busca']);
        $lista = Servico::listarPorTermo($termo);
    } else {
        $lista = Servico::listar();
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Busca" name="busca">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
</section>

<?php if (isset($lista) && count($lista) > 0) : ?>
    <section class="servicos">
        <table>
            <tbody>
                <tr>
                    <th>Nome Atividade</th>

                    <th>Descrição</th>
                </tr>

                <?php foreach ($lista as $servico) : ?> <tr>
                        <td> <a href="/sefast/views/detalhes_servico.php?id=<?= $servico['id_servico'] ?>"><?= $servico['nome_servico'] ?></a> </td>

                        <td><?= $servico['descricao'] ?></td>
                    </tr> <?php endforeach; ?>

            </tbody>

        </table>
    </section>
<?php else : ?>
    <section>
        <div class="alert alert-danger text-center m-3" role="alert">
            Nenhum serviço encontrado
        </div>
    </section>
<?php endif; ?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>