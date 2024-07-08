<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
          body {
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  height: 100vh;
                  margin: 0;
                  background-color: #f0f2f5;
            }

            .container {
                  max-width: 350px;
                  background: #F8F9FD;
                  background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
                  border-radius: 40px;
                  padding: 25px 35px;
                  border: 5px solid rgb(255, 255, 255);
                  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
                  margin: 20px;
            }

            .heading {
                  text-align: center;
                  font-weight: 900;
                  font-size: 30px;
                  color: rgb(16, 137, 211);
            }

            .form {
                  margin-top: 20px;
            }

            .form .input {
                  width: 100%;
                  background: white;
                  border: none;
                  padding: 15px 20px;
                  border-radius: 20px;
                  margin-top: 15px;
                  box-shadow: #cff0ff 0px 10px 10px -5px;
                  border-inline: 2px solid transparent;
            }

            .form .input::-moz-placeholder {
                  color: rgb(170, 170, 170);
            }

            .form .input::placeholder {
                  color: rgb(170, 170, 170);
            }

            .form .input:focus {
                  outline: none;
                  border-inline: 2px solid #12B1D1;
            }

            .form .forgot-password {
                  display: block;
                  margin-top: 10px;
                  margin-left: 10px;
            }

            .form .forgot-password a {
                  font-size: 11px;
                  color: #0099ff;
                  text-decoration: none;
            }

            .form .login-button {
                  display: block;
                  width: 100%;
                  font-weight: bold;
                  background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
                  color: white;
                  padding-block: 15px;
                  margin: 20px auto;
                  border-radius: 20px;
                  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
                  border: none;
                  transition: all 0.2s ease-in-out;
            }

            .form .login-button:hover {
                  transform: scale(1.03);
                  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
            }

            .form .login-button:active {
                  transform: scale(0.95);
                  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
            }

            .social-account-container {
                  margin-top: 25px;
            }

            .social-account-container .title {
                  display: block;
                  text-align: center;
                  font-size: 10px;
                  color: rgb(170, 170, 170);
            }

            .social-account-container .social-accounts {
                  width: 100%;
                  display: flex;
                  justify-content: center;
                  gap: 15px;
                  margin-top: 5px;
            }

            .social-account-container .social-accounts .social-button {
                  background: linear-gradient(45deg, rgb(0, 0, 0) 0%, rgb(112, 112, 112) 100%);
                  border: 5px solid white;
                  padding: 5px;
                  border-radius: 50%;
                  width: 40px;
                  aspect-ratio: 1;
                  display: grid;
                  place-content: center;
                  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 12px 10px -8px;
                  transition: all 0.2s ease-in-out;
            }

            .social-account-container .social-accounts .social-button .svg {
                  fill: white;
                  margin: auto;
            }

            .social-account-container .social-accounts .social-button:hover {
                  transform: scale(1.2);
            }

            .social-account-container .social-accounts .social-button:active {
                  transform: scale(0.9);
            }

            .agreement {
                  display: block;
                  text-align: center;
                  margin-top: 15px;
            }

            .agreement a {
                  text-decoration: none;
                  color: #0099ff;
                  font-size: 9px;
            }
            h4 a {
                text-decoration: none; /* Supprime le soulignement par défaut */
                border-bottom: 1px solid transparent; /* Ajoute une bordure inférieure transparente */
                transition: border-color 0.3s; /* Transition pour un effet de changement de couleur de bordure */
            }

           h4 a:hover {
                border-color: black; /* Couleur de la bordure lorsque survolé */
            }
            .white-icon {
                color: white; /* Couleur blanche pour les icônes */
            }

    </style>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "ucadtdsi2023";
$dbname = "register";
$message = ""; // Initialisez la variable $message avec une chaîne vide
$bdd = null; // Initialisez $bdd à null

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Database connection error: " . $e->getMessage();
}

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
                        $message = "<div class='success text-white fs-4'>Inscription réussie avec succès !</div>";
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
      <?php echo $message; ?> <!--  ligne pour afficher les messages -->
  
      <form action="" method="post" class= "form">
        <input required="" class="input" type="text" name="username" id="username" placeholder="Username">
        <input required="" class="input" type="date" name="date" id="date" placeholder="Date de Naissance">
        <input required="" class="input" type="email" name="email" id="email" placeholder="Email">
        <input required="" class="input" type="password" name="mdp" id="password" placeholder="Password">

        <input required="" class="input" type="password" name="confirm" id="confirm" placeholder="Confirm Password">
        <h4>Deja un compte??<a href="login_process.php">Connectez Vous</a></h4>
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
