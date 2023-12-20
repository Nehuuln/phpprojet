<?php

@$page = $_GET['page'];

if ($page == 'main') {
    include('views/main.php');

} elseif ($page == 'connexion') {
    include('views/login.php');

} elseif ($page == 'inscription') {
    include('views/register.php');
} elseif ($page == 'a_la_une') {
    include('views/a la une.php');
} elseif ($page == 'bibliotheque') {
    include('views/bibliotheque.php');
} elseif ($page == 'favoris') {
    include('views/favoris.php');
} elseif ($page == 'deconnexion') {
    include('views/deconnexion.php');
} else {
    include('util/404.php');
}