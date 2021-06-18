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

                var_dump($user);

        }

        $this->render("connexion");

    }
}