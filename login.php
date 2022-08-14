<?php
// Soumission du formulaire
// Je vérifie si mes variables email et password existent grace à isset()
if (isset($_POST['email']) && isset($_POST['password'])) {

    foreach ($users as $user) {
        // Si l'email et le mot de passe entrés dans le form par mon user sont strictement égaux à ceux de ma bdd alors je lui donne accès au contenu, sinon je lui renvoie un msg d'erreur.
        if (
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ) {
          // Enregistrement de l'email et de l'utilisateur en session
          $_SESSION['LOGGED_USER'] = $user['email'];

        } 
    }
}
?>

<!-- Création d'une session via les cookies -->
<!-- !!! toujours placer un cookies avent le code html !!! -->
<?php 
 setcookie(
    'LOGGED_USER',
    'utilisateur@exemple.com',
    [
        // je determine quand je veux que mon cookies expire
        'expires' => time() + 365*24*3600,
        // les deux var suivantes permettent de sécuriser mon cookies
        // ça protège d'une éventuelle faille xss
        'secure' => true,
        'httponcly' => true,
    ]
    );
?>

    <!-- Si l'utilisateur et non identifé, on affiche le formulaire -->
    <?php if (!isset($_SESSION['LOGGER_USER'])): ?>

        <form action="home.php" method="post">
            <!-- Si message d'erreur on l'affiche -->
            <?php if (isset($errorMessage)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $errorMessage; ?>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="you@exemple.com">
                <div id="email-help" class="form-text">L'email utilisé lors de la création de compte.
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
    
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    

    <!-- Si le user est bien connecté on affiche le message de succès -->
    <?php else : ?>
        <div class="alert alert-success" role="alert">

        <!-- Souhaiter la bienvenue à l'utilisateur -->
            Bonjour et bienvenue sur le site <?php echo $_SESSION['LOGGED_USER']; ?>

            <!-- J'affiche le nom de l'utilisateur via le cookie -->
            Bonjourn<?php echo $_COOKIE['LOGGED_USER']?> !
        </div>
    <?php endif ?>
    </div>
</body>
</html>