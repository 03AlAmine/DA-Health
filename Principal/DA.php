<?php
include "../layouts/header.php";
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Your custom CSS -->
    <link rel="stylesheet" href="../Css/index.css">
    <style>

    </style>

</head>

<body>

    <main>
        <div class="fond">

            <!-- Dieeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->

            <div style="position: relative;">
                <img src="../Image/fond.jpg" style="width: 100%; height: 500px;filter: brightness(150%);
                " alt="DieAmine Health" class="logo">
                <img src="../Image/accueil.png" alt="" style="position: absolute; top: 0; left: 0;">
            </div>
            <div class="texte text-white">
                <div class="fond-first">
                    <h1>Bienvenue sur <span style="color: orange;">DieAmine Health</span></h1>
                    <br>Gerez facilement vos consultations .<br>Accédez à vos dossiers médicaux en un clic.
                    <br>Restez connecté avec vos patients où que vous soyez. <br>Simplifiez la gestion de votre cabinet
                    médical.
                </div>
                <div class="bouton btn_insc mb-5">
                    <a type="submit" class=" btn animation  col-md-5 " style="border-radius: 30px;">Inscription</a>
                </div>
                <p>Rejoignez-nous dès aujourd'hui et découvrez une nouvelle façon de pratiquer la médecine!!
                </p>
            </div>
        </div>
        <section class=" first-section">
            <div class="card-container mb-5" style="display: flex; justify-content: center; align-items: flex-start; ">
                <div class="card " style="width: 26rem; margin-top: -70px; padding: 20px;">
                    <img src="../Image/calendrier.PNG" class="card-img-top" alt="..." style="width: 78px;">
                    <div class="card-body">
                        <h5 class="card-title">Calendrier du medecin</h5>
                        <p class="card-text">Agenda des consultations <br>d'un medecin, planning de <br>l'activite d'un
                            cabinet medical.
                        </p>
                    </div>
                </div>
                <div class="card pb-3" style="width: 26rem; margin-top: -70px; padding: 5px;">
                    <img src="../Image/cabinet.PNG" class="card-img-top cabinet" alt="..." style="width: 90px;">
                    <div class="card-body">
                        <h5 class="card-title">Cabinet medical de <br>haute qualite</h5>
                        <p class="card-text">Une consultation immediate <br> des dossiers independamment au lieu <br>ou
                            se situe le medecin</p>
                    </div>
                </div>
                <div class="card" style="width: 26rem; margin-top: -70px; padding: 5px;">
                    <img src="../Image/urgence.PNG" class="card-img-top" alt="..." style="width: 90px;">
                    <div class="card-body">
                        <h5 class="card-title">Cas d'urgence</h5>
                        <p class="card-text">L'application DieAmine health permet <br>de sauver des vies humaines
                            <br>grace a sa simplicité,mobilité et sa rapidité.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Al Amineeeeeeeeeeeeeeeeeeeeeeeeeeee -->
            <div class="d-flex align-items-center mt-5 pt-5">
                <div class="col-md-6" id="text-for-about">
                    <p>DieAmine est une solution qui consiste à assurer la gestion</p>
                    <p>dans son sens le plus large, des dossiers médicaux des patients avec un outil de traitement
                        efficace
                        des informations et adapté à diverses spécialités médicales, intégrant la gestion financière et
                        un...</p>

                    <p>MonDocteur vous aide pour gérer vos cabinets où que vous soyez</p>
                    <p>Depuis n’importe quel équipement accessible (ordinateur, tablette, Smartphone…), assurant la
                        compatibilité avec tout navigateur internet et tout Operating Systems (OS Mac, Pc) et la
                        sécurité de
                        la connexion par un identifiant et mot de passe personnalisables. D’ailleurs l’hébergement...
                    </p>
                    <div class=" d-flex justify-content-center">
                        <a href="" class="d-flex col-md-8 justify-content-center align-items-center  btn_suite">Lire la
                            suite</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center ">
                    <img src="../Image/Img_about.png" height="350" class=" rounded img-about" alt=""
                        id="../Image-about">

                </div>
            </div>

        </section>

        <!-- Al Amineeeeeeeeeeeeeeeeeeeeeeeeeeee -->
        <section class="second-section">
            <div>
                <h2 class=" text-center">Fonctionnalités</h2>
                <p class=" text-center">Tout ce dont vous avez besoin pour gérer votre pratique</p>
            </div>
            <div class="container-fluid d-flex img_secon_sec1 ">
                <div class="col-md-4  ">
                    <span class="d-flex justify-content-center">
                        <img src="../Image/accueil-1.png" class=" rounded col-md-5" alt="">
                    </span>
                    <p class="text-center"><span>Accueil</span> <br> Un centre d’administration multifonctionnel. </p>
                </div>
                <div class="col-md-4">
                    <span class="d-flex justify-content-center">
                        <img src="../Image/doctor-calendrier.png" class=" rounded col-md-5" alt="">
                    </span>
                    <p class="text-center"><span>Réservation en ligne</span> <br>Planification de rendez-vous facile
                    </p>

                </div>
                <div class="col-md-4  ">
                    <span class="d-flex justify-content-center">
                        <img src="../Image/fonctionne-par-tout.png" class=" rounded col-md-5" alt="">
                    </span>
                    <p class="text-center"><span>Accessible </span> <br> Partout! Tant qu’il ya Internet.</p>

                </div>
            </div>

            <div class="container-fluid d-flex img_secon_sec2 ">
                <div class="col-md-4  ">
                    <span class="d-flex justify-content-center">
                        <img src="../Image/doctor-3.png" class=" rounded col-md-5" alt="">
                    </span>
                    <p class="text-center"><span>Dossier médical électronique</span> <br>la santé de vos patients à tout
                        moment et à un coup d’œil </p>

                </div>
                <div class="col-md-4  ">
                    <span class="d-flex justify-content-center">
                        <img src="../Image/doctor2.png" class=" rounded col-md-5" alt="">
                    </span>
                    <p class="text-center"><span>Calendrier</span> <br>
                        Organisez facilement votre horaire</p>

                </div>
                <div class="col-md-4  ">
                    <span class="d-flex justify-content-center">
                        <img src="../Image/doctor-6.png" class=" rounded col-md-5 " alt="">
                    </span>
                    <p class="text-center"><span>Fonctionne partout</span> <br>
                        Ordinateur portable, tablette, smartphone, Windows, OS X, Linux … </p>
                </div>
            </div>

            <div class="container-fluid d-flex img_secon_sec3 ">
                <div class="col-md-4 ">
                    <span class="d-flex justify-content-center">
                        <img src="../Image/doctor-11.png" class=" rounded col-md-5" alt="">
                    </span>
                    <p class="text-center"><span>Fonctionne partout</span> <br>Tout est dans le nuage!</p>
                </div>
                <div class="col-md-4  ">
                    <span class="d-flex justify-content-center">
                        <img src="../Image/doctor-12.png" class=" rounded col-md-5" alt="">
                    </span>
                    <p class="text-center"><span>Stockage illimité de fichiers</span> <br>
                        Simplement stocker plus</p>
                </div>
                <div class="col-md-4  ">
                    <span class="d-flex justify-content-center">
                        <img src="../Image/doc" class=" rounded col-md-5" alt="">
                    </span>
                    <p class="text-center"><span>Finances</span> <br>
                        Facturation, frais, rapports </p>

                </div>
            </div>
        </section>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Js/index.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html <?php
        include "../layouts/footer.php";
        ?>