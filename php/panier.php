<!-- Panier  -->

<?php 
$idclient = time();
?>


table users:

- id 
- id_client

table panier :  
- id
- id_client
- statut <!-- pour savoir si il est connecter -->



    <!-- ...........................................  FASTCASUALTURK .................................................. -->
    <div class="box-fastcasual">
        <div class="box-texte-gauche">
            <div class="texte-gauche">
                <!-- Affichage -->
                <?php
                $idFast = 1;
                $queryT = "SELECT * FROM accueil WHERE id = :id";
                $reqT = $bdd ->prepare($queryT);
                $reqT->bindValue(':id', $idFast, PDO::PARAM_STR);
                $reqT -> execute();
                $data = $reqT -> fetch();
                // var_dump($data);
                ?>
                <!-- Requete -->
                <?php echo '<h3 class="fastcasual-titre">'.mb_strtoupper(htmlspecialchars($data['titre_accueil']));?> <br><br></h3>
                <?php echo '<p class="fastcasual-texte">'.htmlspecialchars($data['texte_accueil'])?></p>
            </div>
        </div>
        <!-- Image -->
        <div class="box-image-droite">
            <img class="image" src="./img/havuc_s.png" width="100%">
        </div>
    </div>

    <!-- ........................................... BREAKFAST .................................................. -->

    <div class="box-breakfast">
    <?php
        $idPas = 2;
        $queryPas = "SELECT * FROM accueil WHERE id = :id";
        $reqPas = $bdd ->prepare($queryPas);
        $reqPas->bindValue(':id', $idPas, PDO::PARAM_STR);
        $reqPas -> execute();
        $data = $reqPas -> fetch();
        ?>
                <!-- Requete -->
        <div class="box-image-gauche">
            <img class="image-breakfast" src="<?php echo $data['image_accueil']; ?>" width="100%">
        </div>

        <div class="box-texte-droite">
            <div class="texte-droite">
                <h3 class="passione-titre"><?php echo $data['titre_accueil'];?></h3><br><br>
                <p class="passione-texte"><?php echo $data['texte_accueil'];?></p><br>
            </div>
        </div>
    </div>

    <!-- ...........................................  3 CATEGORIE  .................................................. -->

    <div class="box-3categorie">
        <?php
        $idEntre = 3;
        $queryEntre = "SELECT * FROM accueil WHERE id =:id";
        $reqEntre = $bdd -> prepare($queryEntre);
        $reqEntre -> bindValue(":id", $idEntre, PDO::PARAM_STR);
        $reqEntre -> execute();
        $data = $reqEntre -> fetch();
        // var_dump($data);
        ?>
        <div class="box-entree">
            <div class="image-plat"><img src="<?php echo $data['image_accueil'];?>" alt=""></div>
            <div class="box-texte-entree">

                <div class="box-titre-3categorie">
                    <h3 class="titre-3categorie"><?php echo mb_strtoupper(htmlspecialchars($data['titre_accueil']));?></h3>
                </div>

                <div class="box-texte-3categorie">
                    <span class="texte-3categorie"><?php echo htmlspecialchars($data['texte_accueil']);?></span>
                </div>

                <div class="box-lien-3categorie">
                    <a class="lien-3categorie" href="index.php?page=7">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="box-plat">
            <?php
            $idPlat = 4;
            $queryPlat = "SELECT * FROM accueil WHERE id =:id";
            $reqPlat = $bdd-> prepare($queryPlat);
            $reqPlat -> bindValue(":id" ,$idPlat, PDO::PARAM_STR);
            $reqPlat -> execute();
            $data = $reqPlat -> fetch();
            // var_dump($data);
            ?>
            <div class="image-plat"><img src="<?php echo $data['image_accueil'];?>" alt=""> </div>
            <div class="box-texte-plat">

                <div class="box-titre-3categorie">
                    <h3 class="titre-3categorie"><?php echo mb_strtoupper(htmlspecialchars($data['titre_accueil']));?></h3>
                </div>

                <div class="box-texte-3categorie">
                    <span class="texte-3categorie"><?php echo htmlspecialchars($data['texte_accueil']);?></span>
                </div>

                <div class="box-lien-3categorie">
                    <a class="lien-3categorie" href="index.php?page=8">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="box-dessert">
            <?php
            $idDes = 5;
            $queryDes = "SELECT * FROM accueil WHERE id =:id";
            $reqDes = $bdd-> prepare($queryDes);
            $reqDes -> bindValue(":id" ,$idDes, PDO::PARAM_STR);
            $reqDes -> execute();
            $data = $reqDes -> fetch();
            // var_dump($data);
            ?>
            <div class="image-plat"><img src="<?php echo $data['image_accueil'];?>" alt=""></div>
            <div class="box-texte-dessert">

                <div class="box-titre-3categorie">
                    <h3 class="titre-3categorie"><?php echo mb_strtoupper(htmlspecialchars($data['titre_accueil']));?></h3>
                </div>

                <div class="box-texte-3categorie">
                    <span class="texte-3categorie"><?php echo htmlspecialchars($data['texte_accueil']);?></span>
                </div>

                <div class="box-lien-3categorie">
                    <a class="lien-3categorie" href="index.php?page=9">Voir plus</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ...........................................  TRAITEUR .................................................. -->

    <div class="box-traiteur">
        <!-- TEXTE -->
        <div class="box-gauche-traiteur">
            <?php
            $idTrait = 6;
            $queryTrait = "SELECT * FROM accueil WHERE id =:id";
            $reqTrait = $bdd-> prepare($queryTrait);
            $reqTrait -> bindValue(":id" ,$idTrait, PDO::PARAM_STR);
            $reqTrait -> execute();
            $data = $reqTrait -> fetch();
            // var_dump($data);
            ?>
            <div class="box-titre-traiteur">
                <span class="titre-traiteur"><?php echo mb_strtoupper(htmlspecialchars($data['titre_accueil']));?></span>
            </div>
            <div class="box-texte-traiteur">
                <span class="texte-traiteur"><?php echo htmlspecialchars($data['texte_accueil']);?></span>
            </div>
            <div class="box-bouton-traiteur">
                <a href="<?php echo htmlspecialchars($data['lien_accueil']);?>" class="w-75 fs-3 btn btn-lg btn-outline-light couleur">NOS FORFAITS</a>
            </div>
        </div>
        <!-- IMAGE -->
        <div class="box-image-traiteur">
            <img src="<?php echo $data['image_accueil'];?>" width="60%">
        </div>
    </div>