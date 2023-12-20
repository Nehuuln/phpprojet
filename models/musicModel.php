<?php
include_once "database.php";

function getAllMusics() {
    global $pdo;

    try {
        $query = "SELECT nom, date, musique, image FROM musics";
        $stmt = $pdo->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        return [];
    }
}

$musics = getAllMusics();
?>
