<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    $message = "";

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
        <?php echo $message ?>
        <!--  ligne pour afficher les messages -->

        <form action="" method="post" class="form">
            <input required="" class="input" type="text" name="username" id="username" placeholder="Username">
            <input required="" class="input" type="date" name="date" id="date" placeholder="Date de Naissance">
            <input required="" class="input" type="email" name="email" id="email" placeholder="Email">
            <div class="input-group">
                <input required="" class="input" type="password" name="mdp" id="password" placeholder="Password">
                <i id="toggle-password" class="fas fa-eye-slash"></i>
            </div>
            <div class="input-group">
                <input required="" class="input" type="password" name="confirm" id="confirm"
                    placeholder="Confirm Password">
                <i id="toggle-confirm-password" class="fas fa-eye-slash"></i>
            </div>
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
        const passwordInput = document.getElementById('password');
        togglePasswordButton.addEventListener('click', function() {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            togglePasswordButton.classList.toggle('fa-eye');
            togglePasswordButton.classList.toggle('fa-eye-slash');
        });

        const toggleConfirmPasswordButton = document.getElementById('toggle-confirm-password');
        const confirmPasswordInput = document.getElementById('confirm');
        toggleConfirmPasswordButton.addEventListener('click', function() {
            const type = confirmPasswordInput.type === 'password' ? 'text' : 'password';
            confirmPasswordInput.type = type;
            toggleConfirmPasswordButton.classList.toggle('fa-eye');
            toggleConfirmPasswordButton.classList.toggle('fa-eye-slash');
        });
        </script>
    </div>
</body>

</html>