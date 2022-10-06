<?php
    if(isset($_GET['categorie'])){
        $cat =$_GET['categorie'];
        // requete
        $queryC = "SELECT * FROM  categorie WHERE id= :id ";
        $reqC = $bdd->prepare($queryC);
        $reqC->bindValue(':id', $cat, PDO::PARAM_STR);
        $reqC->execute();
        $data = $reqC -> fetch();
    }
?>

<!-- Affichage du nom de la categorie dans la box trait -->
<div class="box-trait">
    <div class="trait">
        <span class="span-trait">
            <a href="index.php?page=1"><i class="bi bi-house"></i></a> 
                                / <!-- separation -->
            <?php echo $data['nom_categorie'] ?></span> 
    </div> 
</div>

    <?php
        // requete préparé pour recup les sous categories 
        $querySC = "SELECT * FROM  sous_categorie WHERE id_categorie= :id_categorie ";
        $reqSC = $bdd->prepare($querySC);
        $reqSC->bindValue(':id_categorie', $cat, PDO::PARAM_STR);
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
            <img src="<?php echo $data['photo_produit']; ?>" width="85%" height="80%">
        </div>
        <div class="texte-produit">
            <h4 class="nom_produit"><?php echo $data['nom_produit']; ?> ................................... <?php echo $data['prix_produit']; ?>€</h4>
            <span class="description"><?php echo $data['description_produit']; ?></span>
        </div>
    </div>
    <!-- fin des boucles -->
    <?php
            } //fin boucle produit
    ?>
</div> 
    <?php
    } //fin boucle sous categorie
    ?>