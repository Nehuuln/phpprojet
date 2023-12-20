<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        include_once "database.php";

        $email = $_POST['email'];

        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($_POST['password'], $user['password'])) {
                $_SESSION["nom"] = $user['nom'];
                $_SESSION['loggedin'] = true;
                header("Location: /?page=main");
                exit();
            } else {
                $error = "Mot de passe incorrect. Veuillez réessayer";
            }
        } else {
            $error = "Email incorrect. Veuillez réessayer";
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}
?>
