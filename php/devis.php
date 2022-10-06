<div class="box-trait">
    <div class="trait">
        <span class="span-trait">
            <a href="index.php?page=1"><i class="bi bi-house"></i></a>
            /
            <!-- separation -->
            <a href="index.php?page=5"> Devis traiteur</a></span>
    </div>
</div>

<div class="container">
    <main>
        <div class="text-center">
            <h2>DEVIS TRAITEUR</h2>
            <p class="lead texte-devis mt-4 mb-4">Vous êtes à la recherche d’un traiteur pour l’organisation d’un évènement privé
                ou professionnel sur Metz ou ses environs ?<br>
                <strong>MALO</strong> est à votre écoute et vous propose des préstations personnalisées en fonction de
                vos envies et en s’adaptant à votre budget :<br>
                Buffet chaud, Buffet froid, plât à l'assiette.</p>
            <p class="lead col-lg-8 mx-auto text-danger texte-connexion-devis bg-light">Attention ! Vous devez être connecté pour pouvoir faire votre demande de devis. 
                <a class="text-dark" href="index.php?page=6">Connectez-vous</a>
            </p>
        </div>

        <div class="col-md-7 col-lg-10 mx-auto mt-5">
            <form class="needs-validation" novalidate="">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="tel" class="form-label">Type de préstation</label>
                        <select class="form-select" aria-label="Default select example" name="type-prestation" id="type-prestation">
                            <option selected>Selectionnez type de préstation</option>
                            <option value="1">Mariage</option>
                            <option value="2">Baptême</option>
                            <option value="3">Fiançaille</option>
                            <option value="4">Anniversaire</option>
                            <option value="4">Séminaire</option>
                            <option value="4">Cocktail</option>
                            <option value="4">Pot de départ</option>
                            <option value="4">Inauguration</option>
                            <div class="invalid-feedback">Veuillez sélectionner votre type de préstation.</div>
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label for="tel" class="form-label">Type de repas</label>
                        <select class="form-select" aria-label="Default select example" name="type-prestation" id="type-prestation">
                            <option selected>Selectionnez type de repas </option>
                            <option value="1">Mariage</option>
                            <option value="2">Baptême</option>
                            <option value="3">Fiançaille</option>
                            <option value="4">Anniversaire</option>
                            <option value="4">Séminaire</option>
                            <option value="4">Cocktail</option>
                            <option value="4">Pot de départ</option>
                            <option value="4">Inauguration</option>
                            <div class="invalid-feedback">Veuillez sélectionner votre type de préstation.</div>
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label for="tel" class="form-label">Nombre de personnes</label>
                        <input type="numero" class="form-control" id="tel" name="tel" required="">
                        <div class="invalid-feedback">Please enter your shipping address.</div>
                    </div>
                    
                    <div class="col-sm-3 mx-auto">
                        <label for="tel" class="form-label">Date de l'événement</label>
                        <input type="numero" class="form-control" id="tel" name="tel" required="">
                        <div class="invalid-feedback">Please enter your shipping address.</div>
                    </div>

                    <div class="col-sm-3 ms-5">
                        <label for="tel" class="form-label">Date du jours</label>
                        <input type="numero" class="form-control" id="tel" name="tel" required="">
                        <div class="invalid-feedback">Please enter your shipping address.</div>
                    </div>

                    <div class="col-12">
                        <label for="msg" class="form-label">Votre demande en quelques mots :</label>
                        <textarea name="msg" id="msg" class="form-control" style="height: 200px"></textarea>
                        <div class="invalid-feedback">Please enter your shipping address.</div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-lg couleur btn-outline-light" type="submit">Envoyer</button>
            </form>
        </div>
    </main>
</div>

