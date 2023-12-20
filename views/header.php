<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/a-la-une.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bibliotheque.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" href="img/soundwave-icon.ico" type="image/x-icon">
    <title>Sound Wave</title>
</head>

<body <?php echo @$_GET['page'] === 'connexion' ? 'data-page="connexion"' : '';
echo @$_GET['page'] === 'inscription' ? 'data-page="inscription"' : ''; ?>>
    <header>
        <div class="header-container">
            <h1><a href="?page=main"><img src="img/soundwave.png" alt="" width="60px"></a></h1>
            <nav>
                <ul class="main-links">
                    <li><a href="index.php?page=a_la_une" <?php echo ($_GET['page'] === 'a_la_une') ? 'class="active"' : ''; ?>><i
                                class="fas fa-star"></i> A la une</a></li>
                    <li><a href="index.php?page=bibliotheque" <?php echo ($_GET['page'] === 'bibliotheque') ? 'class="active"' : ''; ?>><i class="fas fa-book"></i> Bibliothèque</a></li>
                    <li><a href="index.php?page=favoris" <?php echo ($_GET['page'] === 'favoris') ? 'class="active"' : ''; ?>><i
                                class="fas fa-heart"></i> Favoris</a></li>
                </ul>
            </nav>


            <nav>
                <ul class="secondary-links">
                    <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                        echo '<li class="user-info">';
                        echo '<div class="info-trigger"><i class="fas fa-user"></i></div>';
                        echo '<div class="info-popup">';
                        echo '<div class="user-profile">';
                        echo '<span> Bonjour, <br>' . $_SESSION['nom'] . '</span>';
                        echo '<div class="logout-btn"><a href="index.php?page=deconnexion"><i class="fas fa-sign-out-alt"></i></a></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</li>';
                    } else {
                        if ($_GET['page'] !== 'connexion') {
                            echo '<li><a href="index.php?page=connexion"><i class="fas fa-sign-in-alt"></i></a></li>';
                            echo '<li><a href="index.php?page=inscription"><i class="fas fa-pen"></i></a></li>';
                        }
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <script>
        const infoTrigger = document.querySelector('.info-trigger');
        const infoPopup = document.querySelector('.info-popup');

        infoTrigger.addEventListener('mouseover', () => {
            infoPopup.style.display = 'block';
        });

        infoPopup.addEventListener('mouseleave', () => {
            infoPopup.style.display = 'none';
        });
    </script>