<?php
    include "php/bdd.php";    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link rel="icon" href="../filrouge/img/Istanbul-Nanterre.png">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet"> <!-- RUBIK -->
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <!-- Lien pour la police google font -->
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Fira+Sans&display=swap"
        rel="stylesheet"> <!-- Lien pour la police google font -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Lien pour les icons de bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <title>MALO</title>
</head>

<body>

    <!-- ...........................................  NAVBAR .................................................. -->

    <nav class="navbar navbar-expand-lg bg-white position-fixed col-12">
        <div class="container-fluid">
            <a class="navbar-brand maras-titre fs-1" href="index.php?page=1">MALO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-5" aria-current="page" href="index.php?page=1">Accueil</a>
                    </li>
                    <li class="nav-item dropdown"> <!-- Deroulant -->
                        <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                            La carte 
                        </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fs-5" href="index.php?page=2">Carte</a></li>
                                <?php
                                $queryCat = "SELECT * FROM categorie"; // <- categorie 
                                $reqCat = $bdd->prepare($queryCat);
                                $reqCat->execute();
                                // la boucle
                                while($data = $reqCat -> fetch()){

                                    echo '<li><a class="dropdown-item fs-5" href="index.php?page=7&categorie='.$data["id"].'">'.$data["nom_categorie"].'</a></li>';
                                }
                                    ?>
                            </ul>  
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="index.php?page=3">Menu</a>
                    </li>
                    <li class="nav-item dropdown"> <!-- Deroulant -->
                        <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            A propos de nous
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item fs-5" href="index.php?page=4">Nous contacter</a></li>
                            <li><a class="dropdown-item fs-5" href="index.php?page=11">Notre histoire</a></li>
                            <li><a class="dropdown-item fs-5" href="index.php?page=5">Devis traiteur</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="index.php?page=6">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fin de la navbar -->
    


    <!-- ...........................................  INCLUDE .................................................. -->
    <div class="main">
        <?php
            if (isset($_GET['page'])){
                $page=$_GET['page'];
                if($page==1){
                    include('php/accueil.php');
                }
                elseif($page==2){
                    include('php/carte.php');
                }
                elseif($page==3){
                    include('php/menu.php');
                }
                elseif($page==4){
                    include('php/contacter.php');
                
                }
                elseif($page==5){
                    include('php/devis.php');
                }
                elseif($page==6){
                    include('php/connexion.php');
                }
                elseif($page==10){
                    include('php/inscription.php');
                }
                elseif($page==7){
                    include('php/categorie.php');
                }
                elseif($page==11){
                    include('php/notre_histoire.php');
                }
            }
            else{
                ?>
                <script>window.location.replace("index.php?page=1");</script>
                <?php
            }
        ?>
    </div>

    <!-- ...........................................  FOOTER .................................................. -->
    <div class="footer-contact">
        <div class="nous-suivre">
            <div class="box-titre-nous-suivre">
                <span class="titre-nous-suivre">NOUS SUIVRE</span>
            </div>

            <div class="box-texte-nous-suivre">
                <span class="texte-nous-suivre">Rejoignez-nous sur les réseaux sociaux</span>
            </div>

            <div class="logo-footer">
                <div class="facebook"><a href="#"><i class="bi bi-facebook"></i></a></div>
                <div class="insta"><a href="#"><i class="bi bi-instagram"></i></a></div>
            </div>
        </div>

        <div class="box-nous-contacter">

            <div class="box-titre-nous-contacter">
                <span class="titre-nous-contacter"> NOUS CONTACTER </span>
            </div>

            <div class="box-texte-nous-contacter">
                <span class="texte-nous-contacter">
grgt'gtgtg
                </span>
            </div>
        </div>

        <div class="maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11533.910105439418!2d-79.4570246!3d43.7214059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x752d15e2a20168d0!2sMADO%20-%20Dufferin!5e0!3m2!1sfr!2sfr!4v1662712897381!5m2!1sfr!2sfr"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    <!-- Footer copyright -->
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center text-white p-3 texte-foot" style="background-color: #8A0000;">
            Copyright © 2022.MARAS. Tous droits réservés
        </div>
    </footer>
    <!-- FIN FOOTER -->


    <!-- javascript -->
    <script src="asset/bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>