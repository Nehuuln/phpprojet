<h1>Bibliothèque</h1>

<?php require_once("models/musicModel.php"); ?>

<div class="videos">
    <?php foreach ($musics as $music): ?>
        <div class="video-container">
            <img src="<?php echo $music['image']; ?>" class="music-image" alt="<?php echo $music['nom']; ?>">
            <div class="popup">
                <audio controls class="music-player">
                    <source src="<?php echo $music['musique']; ?>" type="audio/mpeg">
                    Votre navigateur ne supporte pas l'audio HTML5.
                </audio>
                <p class="music-info" style="display: none;">
                    <?php echo $music['nom']; ?> - Date :
                    <?php echo $music['date']; ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="bottom-player popup" style="display: none;">
    <audio controls class="music-player bottom-music-player" style="width: 100%;">
        <source src="" type="audio/mpeg">
        Votre navigateur ne supporte pas l'audio HTML5.
    </audio>
    <p class="bottom-music-info" style="margin-top: 5px;"></p>
</div>

<script>

    $(document).ready(function () {
        $('.music-image').click(function () {
            const isPopupVisible = $('.bottom-player').is(':visible');

            if (!isPopupVisible || $(this).hasClass('active')) {
                $('.bottom-player').slideDown();
                $(this).addClass('active');
            } else {
                $('.bottom-player').slideUp();
                $(this).removeClass('active');
            }

            const audioSrc = $(this).next('.popup').find('.music-player source').attr('src');
            const musicInfo = $(this).next('.popup').find('.music-info').text();

            $('.bottom-music-player source').attr('src', audioSrc);
            $('.bottom-music-player')[0].load();
            $('.bottom-music-info').text(musicInfo);
        });

        $('.bottom-player audio').on('ended', function () {
            $('.bottom-player').slideUp();
            $('.music-image').removeClass('active');
            $('.bottom-music-player source').attr('src', '');
            $('.bottom-music-player')[0].load();
            $('.bottom-music-info').text('');
        });

        $(document).on('click', function (e) {
            if (!$(e.target).closest('.popup').length && !$(e.target).is('.music-image')) {
                $('.bottom-player').slideUp();
                $('.music-image').removeClass('active');
            }
        });
    });

</script>