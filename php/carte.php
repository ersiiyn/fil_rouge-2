<!--...........................................  TITRE DE LA CARTE .................................................. -->
<div class="box-1-carte">
    <div class="box-trait">
        <div class="trait">
            <span class="span-trait">
                <a href="index.php?page=1"><i class="bi bi-house"></i></a>
                /
                <!-- separation -->
                <a href="index.php?page=2"> La carte</a></span>
        </div>
    </div>
</div>
<!-- Requete -->
<?php
        // Requete pour les categories 
        $queryC = "SELECT * FROM  categorie"; 
        $reqC = $bdd->prepare($queryC);
        $reqC->execute();
        // la boucle
        while($data = $reqC -> fetch()){ 
    ?>
<!-- Affichage des categorie en majuscules -->
<div class="box-titre-carte">
    <div class="titre-carte">
        <h2 class="mado-carte">- <?php echo mb_strtoupper(htmlspecialchars($data['nom_categorie'])); ?> -</h2>
        <!-- le nom qu'on veut dans la table -->
    </div>
</div>
<!-- Requete -->
<?php
    // requete préparé pour recup les sous categories 
    $querySC = "SELECT * FROM  sous_categorie WHERE id_categorie= :id_categorie ";
    $reqSC = $bdd->prepare($querySC);
    $reqSC->bindValue(':id_categorie',  $data['id'], PDO::PARAM_STR);
    $reqSC->execute();
        // boucle
        while($data = $reqSC -> fetch()){
?>
<!-- Affichage des sous-cat -->
<div class="box_sous_cat">
    <div class="nom_sous_cat">
        <?php
                echo '<h4 class="nom_produit">'.htmlspecialchars($data['nom_sous_categorie']).'</h4>';
            ?>
    </div>
</div>

<div class="grande-box-carte">
    <!-- Requete -->
    <?php
        // requete préparé pour recup les produits 
        $queryP = "SELECT * FROM  produits WHERE id_sous_categorie= :id_sous_categorie ";
        $reqP = $bdd->prepare($queryP);
        $reqP->bindValue(':id_sous_categorie', $data['id'], PDO::PARAM_STR);
        $reqP->execute();
            // boucle
            while($data = $reqP -> fetch()){
    ?>
    <!-- Affichage des produits -->
    <div class="box-produit">
        <div class="photo-produit">
            <img src="<?php echo htmlspecialchars($data['photo_produit']); ?>" width="85%" height="80%">
        </div>
        <div class="texte-produit">
            <h4 class="nom_produit"><?php echo htmlspecialchars($data['nom_produit']); ?>
                ................................... <?php echo htmlspecialchars($data['prix_produit']); ?>€</h4>
            <span class="description"><?php echo htmlspecialchars($data['description_produit']); ?></span>
        </div>
    </div>
    <!-- Fin des boucles -->
    <?php
            } // fin boucle produits
        ?>
</div>
<?php
            } // fin boucle sous categorie
        ?>
<?php
            } // fin boucle categorie
        ?>