<?php
session_start(); // Démarrer la session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light pb-0 bg-white">
        <a class="navbar-brand col-md-4" href="#">DieAmine Health</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex flex-column justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mt-2 col-md-12 d-flex justify-content-end">
                <li class="nav-item mr-5 d-flex">
                    <a class="nav-link m-0 pt-3 pb-5 test" href="#">ACCUEIL</a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link m-0 pt-3 pb-5" href="#">A PROPOS</a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link m-0 pt-3 pb-5" href="#">CONTACT</a>
                </li>
                <?php
                if (isset($_SESSION['username'])) {
                    echo '
                    <li class="nav-item mr-5">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </button>
                            <div class="dropdown-menu">
                                <span class="dropdown-item">' . htmlspecialchars($_SESSION['username']) . '</span>
                                <a class="dropdown-item" href="#"><i class="fas fa-gear"></i> Settings</a>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-arrow-right-from-bracket"></i> Log Out</a>
                            </div>
                        </div>
                    </li>';
                } else {
                    echo '<li class="nav-item mr-5"><a class="nav-link m-0 pt-3 pb-5" href="../Principal/login_process.php">CONNEXION</a></li>';
                }
                ?>
                <li class="nav-item mr-5 pt-3">
                    <img src="../Image/search1.png" alt="Logo" id="search-logo" height="25" weight="35" class="m-0">
                    <form class="form-inline my-2 my-lg-0 col-md-8 d-flex justify-content-end">
                        <input class="form-control m-0 border" type="search" placeholder="Search..." aria-label="Search"
                            id="search-input">
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Contenu de la page -->
    <script src="../Js/index.js"> </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
</body>

</html>