<?php
if(isset($_GET['page'])){
    $id =$_GET['page'];
    // requete
    $queryBL = "SELECT * FROM  bloc WHERE id_page = :id ";
    $reqBL = $bdd->prepare($queryBL);
    $reqBL->bindValue(':id', $id, PDO::PARAM_STR);
    $reqBL->execute();
    // var_dump($data);

    $dataBL = $reqBL -> fetchAll();

    for($i = 0 ; $i < count($dataBL); $i++){

        $queryEL = "SELECT * FROM  element WHERE id_bloc = :id ";
        $reqEL = $bdd->prepare($queryEL);
        $reqEL->bindValue(':id', $dataBL[$i]['id'], PDO::PARAM_STR);
        $reqEL->execute();

        $dataEL[$i] = $reqEL -> fetchAll();
    }

    // var_dump($dataEL);
        
            ?>
<!-- ...........................................  SLIDER .................................................. -->
        <div class="box-lieux">
            <div class="box-photo">
                <div class="photo">
                    <img src="<?php echo $dataEL[0][0]['contenu'] ?>" width="100%">
                </div>
            </div>
        </div> 
<!-- ...........................................  FASTCASUALTURK .................................................. -->
<div class="box-fastcasual">
        <div class="box-texte-gauche">
            <div class="texte-gauche">
                <?php echo '<h3 class="fastcasual-titre">'.mb_strtoupper(htmlspecialchars($dataEL[1][0]['contenu']));?><br><br></h3>
                <?php echo '<p class="fastcasual-texte">'.htmlspecialchars($dataEL[1][1]['contenu'])?></p>
                <?php echo '<p class="fastcasual-texte">'.htmlspecialchars($dataEL[1][3]['contenu'])?></p>
            </div>
        </div>
        <!-- Image -->
        <div class="box-image-droite">
            <img class="image" src="<?php echo $dataEL[1][2]['contenu']; ?>" width="100%">
        </div>
    </div>

    <!-- ........................................... PASSIONNE .................................................. -->

    <div class="box-breakfast">
        <div class="box-image-gauche">
            <img class="image-breakfast" src="<?php echo $dataEL[2][0]['contenu']; ?>" width="100%">
        </div>

        <div class="box-texte-droite">
            <div class="texte-droite">
                <h3 class="passione-titre"><?php echo $dataEL[2][1]['contenu']; ?></h3><br><br>
                <p class="passione-texte"><?php echo $dataEL[2][2]['contenu']; ?></p><br>
                <p class="passione-texte"><?php echo $dataEL[2][3]['contenu']; ?></p><br>
            </div>
        </div>
    </div>

    <!-- ...........................................  3 CATEGORIE  .................................................. -->

    <div class="box-3categorie">
        <div class="box-entree">
            <div class="image-plat"><img src="<?php echo $dataEL[3][0]['contenu']; ?>" alt=""></div>
            <div class="box-texte-entree">

                <div class="box-titre-3categorie">
                    <h3 class="titre-3categorie"><?php echo mb_strtoupper(htmlspecialchars($dataEL[3][1]['contenu']));?></h3>
                </div>

                <div class="box-texte-3categorie">
                    <span class="texte-3categorie"><?php echo htmlspecialchars($dataEL[3][2]['contenu']);?></span>
                </div>

                <div class="box-lien-3categorie">
                    <a class="lien-3categorie" href="<?php echo $dataEL[3][3]['contenu']; ?>">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="box-plat">
            <div class="image-plat"><img src="<?php echo $dataEL[4][0]['contenu'];?>" alt=""> </div>
            <div class="box-texte-plat">

                <div class="box-titre-3categorie">
                    <h3 class="titre-3categorie"><?php echo mb_strtoupper(htmlspecialchars($dataEL[4][1]['contenu']));?></h3>
                </div>

                <div class="box-texte-3categorie">
                    <span class="texte-3categorie"><?php echo htmlspecialchars($dataEL[4][2]['contenu']);?></span>
                </div>

                <div class="box-lien-3categorie">
                    <a class="lien-3categorie" href="<?php echo $dataEL[4][3]['contenu'];?>">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="box-dessert">
            <div class="image-plat"><img src="<?php echo $dataEL[5][0]['contenu']?>" alt=""></div>
            <div class="box-texte-dessert">

                <div class="box-titre-3categorie">
                    <h3 class="titre-3categorie"><?php echo mb_strtoupper(htmlspecialchars($dataEL[5][1]['contenu']));?></h3>
                </div>

                <div class="box-texte-3categorie">
                    <span class="texte-3categorie"><?php echo htmlspecialchars($dataEL[5][2]['contenu']);?></span>
                </div>

                <div class="box-lien-3categorie">
                    <a class="lien-3categorie" href="<?php echo $dataEL[5][3]['contenu'];?>">Voir plus</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ...........................................  TRAITEUR .................................................. -->

    <div class="box-traiteur">
        <!-- TEXTE -->
        <div class="box-gauche-traiteur">
            <div class="box-titre-traiteur">
                <span class="titre-traiteur"><?php echo mb_strtoupper(htmlspecialchars($dataEL[6][0]['contenu']));?></span>
            </div>
            <div class="box-texte-traiteur">
                <span class="texte-traiteur"><?php echo htmlspecialchars($dataEL[6][1]['contenu']);?></span>
            </div>
            <div class="box-bouton-traiteur">
                <a href="<?php echo htmlspecialchars($dataEL[6][2]['contenu']);?>" class="w-75 fs-3 btn btn-lg btn-outline-light couleur">NOS FORFAITS</a>
            </div>
        </div>
        <!-- IMAGE -->
        <div class="box-image-traiteur">
            <img src="<?php echo $dataEL[6][3]['contenu'];?>" width="60%">
        </div>
    </div>
    <?php
        
    }

?>