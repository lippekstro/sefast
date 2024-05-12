<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/models/servico.php';

try {
    $lista = Servico::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section>
    <div class="slideshow-container">

        <div class="mySlides">
            <img src="/sefast/imgs/sefast_carrossel1.png">
        </div>

        <div class="mySlides">
            <img src="/sefast/imgs/sefast_carrossel2.png">
        </div>

        <a class="anterior" onclick="plusSlides(-1)">&#10094;</a>
        <a class="proximo" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <br>

    <div style="text-align:center">
        <span class="ponto" onclick="currentSlide(1)"></span>
        <span class="ponto" onclick="currentSlide(2)"></span>
    </div>
</section>

<?php if (isset($lista) && count($lista) > 0) : ?>
    <section>
        <div class="cartoes">
            <?php foreach ($lista as $item) : ?>
                <div class="cartao">
                    <div class="conteiner">
                        <img src="data:image;base64,<?= base64_encode($item['foto_servico']) ?>" alt="prof" class="imgprof">

                        <div class="card-conteudo">
                            <h1><b><?= $item['nome_servico'] ?></b></h1>
                            <a href="/sefast/views/detalhes_servico.php?id=<?= $item['id_servico'] ?>" class="btn btn-primary">Ver Mais</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </section>
<?php endif; ?>


<script>
    let slideIndex = 1;
    showSlides(slideIndex);
    let slideInterval = setInterval(() => plusSlides(1), 5000); // Passa automaticamente a cada 5 segundos

    function plusSlides(n) {
        clearInterval(slideInterval); // Limpa o intervalo anterior
        showSlides(slideIndex += n);
        slideInterval = setInterval(() => plusSlides(1), 5000); // Define novo intervalo
    }

    function currentSlide(n) {
        clearInterval(slideInterval); // Limpa o intervalo anterior
        showSlides(slideIndex = n);
        slideInterval = setInterval(() => plusSlides(1), 5000); // Define novo intervalo
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let pontos = document.getElementsByClassName("ponto");

        if (n > slides.length) {
            slideIndex = 1;
        }

        if (n < 1) {
            slideIndex = slides.length;
        }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < pontos.length; i++) {
            pontos[i].className = pontos[i].className.replace(" active", "");
        }

        slides[slideIndex - 1].style.display = "block";
        pontos[slideIndex - 1].className += " active";
    }
</script>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>