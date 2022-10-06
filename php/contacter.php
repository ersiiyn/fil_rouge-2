<div class="box-trait">
        <div class="trait">
            <span class="span-trait">
                <a href="index.php?page=1"><i class="bi bi-house"></i></a> 
                                    / <!-- separation -->
                <a href="index.php?page=4"> Nous contacter</a></span> 
        </div> 
</div>

<div class="container bg-light">
    <main>
        <div class="py-5 text-center">
            <h2>NOUS CONTACTER</h2>
            <p class="lead">Veuillez remplir le formulaire de contact.</p>
        </div>

        <div class="col-md-7 col-lg-10 mx-auto">
            <form class="needs-validation" novalidate="">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">Valid first name is required.</div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">Valid last name is required.</div>
                    </div>
                    
                    <div class="col-sm-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="toi@example.com">
                        <div class="invalid-feedback">Please enter a valid email address for shipping updates.</div>
                    </div>

                    <div class="col-sm-6">
                        <label for="date" class="form-label">Date d'aujourd'hui</label>
                        <input type="date" class="form-control" id="date" name="date" required="">
                        <div class="invalid-feedback">Please enter your shipping address.</div>
                    </div>

                    <div class="col-12">
                        <label for="objet-msg" class="form-label">Objet du message</label>
                        <input type="text" class="form-control" id="objet-msg" name="objet-msg" required="">
                        <div class="invalid-feedback">Please enter your shipping address.</div>
                    </div>

                    <div class="col-12">
                        <label for="msg" class="form-label">Votre message</label>
                        <textarea name="msg" id="msg" class="form-control" style="height: 200px"  ></textarea>
                        <div class="invalid-feedback">Please enter your shipping address.</div>
                    </div>

                <hr class="my-4">

                <button class="w-50 btn btn-lg couleur btn-outline-light mx-auto mb-5" type="submit">Envoyer</button>
            </form>
        </div>
    </main>
</div>
