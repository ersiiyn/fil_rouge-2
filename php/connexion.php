<div class="box-trait">
    <div class="trait">
        <span class="span-trait">
            <a href="index.php?page=1"><i class="bi bi-house"></i></a> 
                                / <!-- separation -->
            <a href="index.php?page=6"> Connexion</a>
        </span> 
    </div> 
</div>

<div class="box-connexion">
    <div class="container box-container">   
        <div class="row">
            <div class="col-10 mx-auto">
                <main class="form-signin w-100 m-auto">
                    <form method="POST" action="traitement-co.php">
                        <!-- Titre connectez vous -->
                        <h1 class="h3 mb-3 fw-normal">Connectez-vous</h1>
                        <div class="form-floating mb-2 ">
                            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="name@example.com">
                            <label for="pseudo">Nom d'utilisateur</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Password">
                            <label for="mdp">Mot-de-passe</label>
                        </div>
                        <!-- Se souvenir -->
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Se souvenir de moi
                            </label>
                        </div>
                        <!-- Bouton envoyer -->
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" class="btn btn-lg w-100 mt-2 couleur btn-outline-light" name="connexion" value="Connexion">
                            </div>
                        </div>
                    </form>
                    <!-- Lien mdp oublie ou creer un compte -->
                    <div class="row">
                        <div class="col-lg-12 mt-3 text-center">
                            <a href="index.php?page=10">Mot de passe oublié ?</a>
                            <a href="index.php?page=10" class="ms-4">Créer un compte</a>
                        </div>
                    </div>
                    <hr>
                </main>
            </div>
        </div>
    </div> 
    <!-- Image -->
    <div class="image-connexion">
        <img src="./img/icecream.png">
    </div>
</div>