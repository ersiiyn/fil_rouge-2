<div class="box-trait">
    <div class="trait">
        <span class="span-trait">
            <a href="index.php?page=1"><i class="bi bi-house"></i></a> 
                                / <!-- separation -->
            <a href="index.php?page=6"> Connnexion</a>
                                / <!-- separation -->
            <a href="index.php?page=10"> Inscription</a>
        </span> 
    </div> 
</div>

<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>INSCRIPTION</h2>
        </div>

        <div class="col-md-7 col-lg-10 mx-auto">
            <form class="needs-validation" novalidate="">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Nom *</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">Valid first name is required.</div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Prénom *</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">Valid last name is required.</div>
                    </div>

                    <div class="col-12">
                        <label for="username" class="form-label">Nom d'utilisateur *</label>
                        <div class="input-group has-validation">
                            <!-- <span class="input-group-text">@</span> -->
                            <input type="text" class="form-control" id="username" placeholder="Pseudo" required="">
                            <div class="invalid-feedback"> Your username is required.</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="username" class="form-label">Mot-de-passe *</label>
                        <div class="input-group has-validation">
                            <!-- <span class="input-group-text">@</span> -->
                            <input type="password" class="form-control" id="username" required="">
                            <div class="invalid-feedback"> Your username is required.</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" placeholder="toi@example.com">
                        <div class="invalid-feedback">Please enter a valid email address for shipping updates.</div>
                    </div>

                    <div class="col-12">
                        <label for="numero" class="form-label">Numéro de téléphone *</label>
                        <input type="tel" class="form-control" id="numero" placeholder="07 66.." required="">
                        <div class="invalid-feedback">Please enter your shipping address.</div>
                    </div>


                <hr class="my-4">

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label" for="save-info">Sauvegarder ces informations pour la prochaine fois.</label>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-lg couleur btn-outline-light" type="submit">S'inscrire</button>
            </form>
        </div>
    </main>
</div>