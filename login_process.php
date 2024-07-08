<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "ucadtdsi2023";
$dbname = "register";

$message = ""; // Variable pour stocker les messages d'erreur ou de succès

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Définir le mode d'erreur de PDO à l'exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

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
                $message = "<div class='success text-white fs-4'>Connexion réussie !</div>";
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

</head>
<body>

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
                  font-size: 20px;
            }
            h4 a {
                text-decoration: none; 
                border-bottom: 1px solid transparent; 
                transition: border-color 0.3s; }

           h4 a:hover {
                border-color: black;
            }
            .white-icon {
                color: white; 
            }

      </style>
<div class="container">
      
    <div class="heading">Sign In</div>
    <?php echo $message; ?> <!-- ligne pour afficher les messages -->

    <form action="" method="post" class= "form">
      <input required="" class="input" type="text" name="username" id="username" placeholder="Username">
      <input required="" class="input" type="password" name="mdp" id="password" placeholder="Password">
      <span class="forgot-password" ><a href="forgot_password.php">Mot de pass oublié?</a></span>
      <h4>Pas encore de compte?? <a href="register_process.php">Inscrivez Vous ici</a></h4>
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