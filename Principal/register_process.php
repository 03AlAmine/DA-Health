<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Css/log_process.css">

</head>
<?php
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $date = htmlspecialchars($_POST['date']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $confirm = htmlspecialchars($_POST['confirm']);

    // Verifie si tous les champs sont remplis
    if (empty($username) || empty($email) || empty($date) || empty($mdp) || empty($confirm)) {
        $message = "<div class='error text-white fs-4'>Veuillez remplir tous les champs</div>";
    } else {
        // Verifie si les mots de pass correspondnet
        if ($mdp !== $confirm) {
            $message = "<div class='error text-white fs-4'>Les mots de passe ne correspondent pas.</div>";
        } else {
            // verifie si le username ou le email existe dans la base de donnee
            if ($bdd) { // Vérifiez si $bdd est défini et non null
                $select = $bdd->prepare('SELECT * FROM users WHERE username = :username OR email = :email');
                $select->bindValue(':username', $username);
                $select->bindValue(':email', $email);
                $select->execute();

                if ($select->rowCount() > 0) {
                    $message = "<div class='error text-white fs-4'>Cet utilisateur ou cette adresse e-mail existe déjà.</div>";
                } else {
                    // inserer
                    $insert = $bdd->prepare("INSERT INTO users (username, date, email, mdp, confirm) VALUES (:username, :date, :email, :mdp, :confirm)");
                    $insert->bindValue(':username', $username);
                    $insert->bindValue(':date', $date);
                    $insert->bindValue(':email', $email);
                    $insert->bindValue(':mdp', $mdp);
                    $insert->bindValue(':confirm', $confirm);

                    if ($insert->execute()) {
                        header('Location:DA.php');
                        exit();
                    } else {
                        $message = "<div class='error text-white fs-4'>Une erreur s'est produite lors de l'inscription.</div>";
                    }
                }
            } else {
                $message = "<div class='error text-white fs-4'>Erreur de connexion à la base de données.</div>";
            }
        }
    }
}
?>

<body>
    <div class="container">

        <div class="heading">S'inscrire</div>
        <!--  ligne pour afficher les messages -->

        <form action="" method="post" class="form">
            <input required="" class="input" type="text" name="username" id="username" placeholder="Username">
            <input required="" class="input" type="date" name="date" id="date" placeholder="Date de Naissance">
            <input required="" class="input" type="email" name="email" id="email" placeholder="Email">
            <input required="" class="input" type="password" name="mdp" id="password" placeholder="Password">

            <input required="" class="input" type="password" name="confirm" id="confirm" placeholder="Confirm Password">
            <h4>Déja un compte?<a href="login_process.php"> Se connecter !</a></h4>
            <span id="password-message" class="error-message"></span>

            <input class="login-button" type="submit" value="S'inscrire">

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
        <script>
            const togglePasswordButton = document.getElementById('toggle-password');
            const passwordInpute = document.getElementById('password');
            togglePasswordButton.addEventListener('click', function() {
                if (passwordInpute.type === 'password') {
                    passwordInpute.type = 'text';
                    togglePasswordButton.classList.remove('fa-eye-slash');
                    togglePasswordButton.classList.add('fa-eye');
                } else {
                    passwordInpute.type = 'password';
                    togglePasswordButton.classList.remove('fa-eye');
                    togglePasswordButton.classList.add('fa-eye-slash');
                }
            });

            const toggleConfirmPasswordButton = document.getElementById('toggle-confirm-password');
            const confirmPasswordInpute = document.getElementById('confirm-password');
            toggleConfirmPasswordButton.addEventListener('click', function() {
                if (confirmPasswordInpute.type === 'password') {
                    confirmPasswordInpute.type = 'text';
                    toggleConfirmPasswordButton.classList.remove('fa-eye-slash');
                    toggleConfirmPasswordButton.classList.add('fa-eye');
                } else {
                    confirmPasswordInpute.type = 'password';
                    toggleConfirmPasswordButton.classList.remove('fa-eye');
                    toggleConfirmPasswordButton.classList.add('fa-eye-slash');
                }
            });
        </script>



</body>

</html>