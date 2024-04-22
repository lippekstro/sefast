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