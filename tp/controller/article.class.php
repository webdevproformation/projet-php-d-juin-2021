<?php 
// article.class.php
// ArticleController => première lettre en majuscule => class 
// convention d'écrire 
// constance du code   
class ArticleController extends Controller{

    public function view(){

        echo "je suis la page d'article";
        // http://localhost/projet-php/tp/article/view/1

        $data = [
            "article" => Bdd::getPdo()->query("SELECT * FROM articles WHERE id = :id", ["id" => 1] )
        ]; // Model => appeler la BDD 
        // requête préparée avec PDO 
        // attaque de votre site internet injection SQL => éviter attaques de type injection SQL 
        // SELECT * FROM articles WHERE id = 1  
        // SELECT * FROM articles WHERE id = 1 ; DELETE * FROM articles ; // injecter du SQL 
        // piratage

        $this->send($data);

        $this->render("single"); // vue render => afficher / rendre 
        // MVC 

    }

}