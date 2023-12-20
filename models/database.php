<?php 

// LANCER MYSQL -> HOST : 51.158.59.186
// -> PORT : 14301
// USER : phppex
// MDP : Supermotdepasse!42


$host = '51.158.59.186';
$port = "14301";
$db   = 'MY';
$user = 'phppex';
$password = 'Supermotdepasse!42';

$pdo = new PDO(
    "mysql:host=$host;dbname=$db;port=$port", 
    $user, $password);
