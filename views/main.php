<h1>Bienvenue sur SoundWave</h1>

<div class="container">


    <div class="slider-wrapper">

        <div class="inner-wrapper">
            <div class="slide"><img src="img/slider1.jpg" alt=""></div>
            <div class="slide"><img src="img/slider2.avifgi" alt=""></div>
            <div class="slide"><img src="img/slider3.png" alt=""></div>
            <div class="slide"><img src="img/slider4.avif" alt=""></div>
        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(function () {
        var inWrap = $('.inner-wrapper');
        var slideWidth = $('.slide').width();
        var slidesCount = $('.slide').length;
        var currentSlide = 1;

        function slideNext() {
            currentSlide = (currentSlide % slidesCount) + 1;
            inWrap.css('transform', 'translateX(' + -(currentSlide - 1) * slideWidth + 'px)');
        }

        var sliderInterval = setInterval(slideNext, 4000);

        $('.prev').on('click', function () {
            clearInterval(sliderInterval);
            currentSlide = (currentSlide - 2 + slidesCount) % slidesCount + 1;
            inWrap.css('transform', 'translateX(' + -(currentSlide - 1) * slideWidth + 'px)');
        });

        $('.next').on('click', function () {
            clearInterval(sliderInterval);
            slideNext();
        });
    });

</script>

<!--
<p>Ecoutez vos musiques préferées !</p>

<p>Ajoutez vos musiques en favoris !</p>

<p>Visionnez les clips de vos artistes préferés !</p>
-->