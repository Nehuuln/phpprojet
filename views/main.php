<h1>Bienvenue sur SoundWave</h1>

<div class="container">


    <div class="slider-wrapper">

        <div class="inner-wrapper">
            <div class="slide"><img src="img/slider1.jpeg" alt=""></div>
            <div class="slide"><img src="img/slider2.jpg" alt=""></div>
            <div class="slide"><img src="img/slider3.jpg" alt=""></div>
            <div class="slide">4</div>
            <div class="slide">5</div>
        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(function () {

        var inWrap = $('.inner-wrapper'),
            $slide = $('.slide');


        function slideNext() {

            inWrap.animate({ left: '-200%' }, 200, function () {

                inWrap.css('left', '-100%');

                $('.slide').last().after($('.slide').first());

            });

        }
        sliderInterval = setInterval(slideNext, 4000);

        $('.prev').on('click', function () {

            inWrap.animate({ left: '0%' }, 200, function () {

                inWrap.css('left', '-100%');

                $('.slide').first().before($('.slide').last());

            });
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