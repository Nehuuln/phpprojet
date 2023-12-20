<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        include_once "database.php";

        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $password = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);

        $query_check_email = "SELECT * FROM users WHERE email = :email";
        $stmt_check_email = $pdo->prepare($query_check_email);
        $stmt_check_email->execute(['email' => $email]);

        if ($stmt_check_email->rowCount() > 0) {
            $error = "Cet email est déjà utilisé. Veuillez en choisir un autre.";
        } else {
            $query_insert_user = "INSERT INTO users (nom, email, password) VALUES (:nom, :email, :password)";
            $stmt_insert_user = $pdo->prepare($query_insert_user);
            $stmt_insert_user->execute(['nom' => $nom, 'email' => $email, 'password' => $password]);

            header("Location: /?page=main");
            exit();
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}
?>
