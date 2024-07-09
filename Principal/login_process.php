<?php
include '../config/db.php';
session_start(); // Démarrer la session

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_input = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
    $mdp_input = isset($_POST['mdp']) ? htmlspecialchars($_POST['mdp']) : '';

    // Vérifier si tous les champs sont remplis
    if (empty($username_input) || empty($mdp_input)) {
        $message = "<div class='error text-white fs-4'>Veuillez remplir tous les champs</div>";
    } else {
        // Préparer et exécuter la requête de sélection
        $select = $bdd->prepare('SELECT * FROM users WHERE username = :username AND mdp = :mdp');
        $select->bindValue(':username', $username_input);
        $select->bindValue(':mdp', $mdp_input);

        if ($select->execute()) {
            if ($select->rowCount() > 0) {
                // Stocker le nom d'utilisateur dans la session
                $_SESSION['username'] = $username_input;
                header('Location: DA.php');
                exit();
            } else {
                $message = "<div class='error text-white fs-4'>Identifiants incorrects. Veuillez réessayer !</div>";
            }
        } else {
            $message = "<div class='error text-white fs-4'>Une erreur s'est produite lors de la tentative de connexion.</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../Css/log_process.css">

</head>

<body>
    <div class="container">

        <div class="heading">Sign In</div>

        <!-- ligne pour afficher les messages -->

        <form action="" method="post" class="form">
            <input required="" class="input" type="text" name="username" id="username" placeholder="Username">
            <input required="" class="input" type="password" name="mdp" id="password" placeholder="Password">
            <span class="forgot-password"><a href="forgot_password.php">Mot de pass oublié?</a></span>
            <hr style="width: 30%;margin-top:30px;border:1px solid rgba(133, 189, 215, 0.8784313725)">
            <h4>Vous-etes nouveau? <a href="register_process.php">S'inscrire</a></h4>
            <input class="login-button" type="submit" value="Se connecter">

        </form>

        <div class="social-account-container">
            <span class="title">Or Sign in with</span>
            <div class="social-accounts">
                <button class="social-button google white-icon">
                    <i class="fab fa-google"></i>
                </button>
                <button class="social-button apple white-icon">
                    <i class="fab fa-apple"></i>
                </button>
                <button class="social-button facebook white-icon">
                    <i class="fab fa-facebook"></i>
                </button>
            </div>
        </div>

    </div>
</body>

</html>