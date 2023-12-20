<?php
require_once("models/loginModel.php");
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

<div class="login">
    <div class="login-container">
        <form action="" method="post" class="login-form-container">
            <h2>Connexion</h2>
            <div class="login-mail">
                <div class="icon-container">
                    <i class="fas fa-envelope"></i>
                </div>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="login-password">
                <div class="icon-container">
                    <i class="fas fa-lock"></i>
                </div>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required>
            </div>
            <div>
                <button type="submit">Se connecter</button>
            </div>
            <div class="not-member">
            <p>Pas de compte ? <a href="index.php?page=inscription">Inscrit toi</a></p>
        </div>
        </form>
    </div>
</div>