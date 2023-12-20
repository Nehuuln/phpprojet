<?php
require_once("models/registerModel.php");
?>

<?php if($error != "") { ?>
    <div class="error-message">
        <?php echo $error; ?>
        <button class="close-button" onclick="hideErrorMessage()">&#10006;</button>
    </div>
    <script>
        function hideErrorMessage() {
            document.querySelector('.error-message').style.display = 'none';
        }
    </script>
<?php } ?>

<div class="register">
    <form action="" method="post" class="register-form-container">
        <h2>Inscription</h2>
        <div class="register-name">
            <div class="icon-container">
                <i class="fas fa-user"></i>
            </div>
            <input type="text" id="nom" name="nom" placeholder="Nom d'utilisateur" required>
        </div>

        <div class="register-mail">
            <div class="icon-container">
                <i class="fas fa-envelope"></i>
            </div>
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>

        <div class="register-password">
            <div class="icon-container">
                <i class="fas fa-lock"></i>
            </div>
            <input type="password" id="motdepasse" name="motdepasse" placeholder="Mot de passe" required>
        </div>
        <div>
            <input type="submit" value="S'inscrire">
        </div>
        <div class="already-member">
            <p>Déjà membre ? <a href="index.php?page=connexion">Connecte-toi</a></p>
        </div>
    </form>
</div>