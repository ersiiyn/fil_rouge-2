<h1>Categorie</h1><br>

<div class="card-body">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom de l'éléments</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <!-- Requete -->
            <?php
            $queryCat = "SELECT *FROM categorie";
            $reqCat = $bdd->prepare($queryCat);
            $reqCat->execute();
            while($dataCat = $reqCat -> fetch()){
            // var_dump($dataCat);
            ?>
            <tbody>
                <tr>
                    <td><?php echo $dataCat['id']; ?></td>
                    <th><?php echo $dataCat['nom_categorie'];?></th>
                    <th><a class="icon-edit" href="#"><i class="link-icon" data-feather="edit"></i></a></th>
                    <th><a class="icon-trash" href="#"><i class="link-icon icon-trash" data-feather="trash-2"></i></a></th>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
    </div>
</div>
