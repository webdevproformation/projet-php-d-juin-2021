<?php 
// login.class.php 

class LoginController extends Controller{
    
    public function index(){

        if(
                !empty($_POST) && 
                strlen($_POST["login"]) > 0 && 
                strlen($_POST["password"]) // azerty
            ){
                // est qu'il y a dans la table utilisateur une ligne dans la login et le mot de passe existe en même temps 
                $sql = "SELECT id FROM utilisateurs WHERE login = :login AND password = :password";

                $identifiants = [
                    "login" => $_POST["login"] ,
                    "password" => sha1($_POST["password"]) // sha1() fonction de hashage
                ];

                $user = Bdd::getPdo()->query($sql , $identifiants);

                // var_dump($user);
                if(!empty($user)){
                    // $_SESSION
                    // super globale 
                    // variable de type tableau associatif => Serveur gardé en mémoire tout au long de la navigation sur le site 
                    // pour utiliser cette variable, il faut au préalable écrire la fonction suivante 

                    // session_start(); à mettre dans le fichier index.php au début du fichier
                    $_SESSION["auth"] = "ok";
                    header("Location: ".WWW."admin/accueil");

                    // $_POST
                    // $_GET 
                    // $_SERVER
                }
                

        }

        $this->render("connexion");

    }

    public function deconnexion(){
        unset($_SESSION["auth"]);
        header("Location: ".WWW."login");
    }
}

// améliorations possibles :

// gestion des utilisateurs => comment modifier son mot de passe depuis le site 
// mot de passe perdu 
// associer les utilisateurs aux articles 
// droits aux utilisateurs Admin / rédacteur 
// ajouter des catégories
// ajouter des images aux articles 
// ajouter du javascript pour améliorer l'ergonomie du site 