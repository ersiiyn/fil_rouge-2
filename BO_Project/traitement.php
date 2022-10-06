<?php
    include ('bdd.php'); //(chemin à adapter)

    $username = $_POST['username'];
    $mdp = $_POST['mdp'];
    
    $query = "SELECT * FROM administrateur WHERE username = :username";
    $req = $bdd->prepare($query);
    $req->bindValue(':username', $username, PDO::PARAM_STR);
    $req->execute();
    
    $data = $req->fetch();
    
    if ($data != NULL) {
        if (password_verify($mdp, $data['mdp'])) {
                $_SESSION['prenom']= $data['prenom'];
                $_SESSION['nom'] = $data['nom'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['admin'] = 'ADMIN';
                
                $_SESSION['message']= '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Bienvenue dans l\'administration</div>';
                header('location: admin.php');
            }
            else{
                $_SESSION['message']= '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Utilisateur inconnu</div>';
                header('location: ../index.php'); // redirection vers le site (chemin à adapter)
            }
        }
        else {
            $_SESSION['message']= '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Mot de passe incorrect</div>';
            header('location: index.php');
        }
?>