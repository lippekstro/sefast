<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php'
?>

<section>
    <div class="slideshow-container">

        <div class="mySlides">
            <img src="https://source.unsplash.com/random/1920x1080/?potato" style="width:100%">
            <div class="text">Construtor</div>
        </div>

        <div class="mySlides">
            <img src="https://source.unsplash.com/random/1920x1080/?artist" style="width:100%">
            <div class="text">Artista</div>
        </div>

        <div class="mySlides">
            <img src="https://source.unsplash.com/random/1920x1080/?sniper" style="width:100%">
            <div class="text">Mercenario</div>
        </div>

        <a class="anterior" onclick="plusSlides(-1)">&#10094;</a>
        <a class="proximo" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <br>

    <div style="text-align:center">
        <span class="ponto" onclick="currentSlide(1)"></span>
        <span class="ponto" onclick="currentSlide(2)"></span>
        <span class="ponto" onclick="currentSlide(3)"></span>
    </div>
</section>

<section>
    <div class="cartoes">
        <div class="cartao">
            <div class="conteiner">
                <img src="/sefast/imgs/prof.avif" alt="prof" class="imgprof">
                <h1><b>SLA</b></h1>
                <button class="butao_c">Ver Mais</button>
            </div>
        </div>
        <div class="cartao2">
            <div class="conteiner2">
                <img src="/sefast/imgs/prof.avif" alt="prof" class="imgprof">
                <h1><b>SLA</b></h1>
                <button class="butao_c">Ver Mais</button>
            </div>
        </div>
        <div class="cartao3">
            <div class="conteiner3">
                <img src="/sefast/imgs/prof.avif" alt="prof" class="imgprof">
                <h1><b>SLA</b></h1>
                <button class="butao_c">Ver Mais</button>
            </div>
        </div>
    </div>
</section>


<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let pontos = document.getElementsByClassName("ponto");

        if (n > slides.length) {
            slideIndex = 1
        }

        if (n < 1) {
            slideIndex = slides.length
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