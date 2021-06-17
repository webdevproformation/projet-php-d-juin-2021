<?php 
// article.class.php
// ArticleController => première lettre en majuscule => class 
// convention d'écrire 
// constance du code   
class ArticleController extends Controller{

    public function view($id = null){

        // http://localhost/projet-php/tp/article/view/1
        // requete en base de donnée 
        $article = Bdd::getPdo()->query("SELECT * FROM articles WHERE id = :id", ["id" => $id]);

        // si l'article que je demande n'existe pas => affiche l'article n'existe 
        if(count($article) === 0){
            App::erreur404();
            die();
        }
        // sinon j'affiche la page 
        $data = [
            "article" =>  current($article)
        ]; // Model => appeler la BDD 
        // requête préparée avec PDO 
        // attaque de votre site internet injection SQL => éviter attaques de type injection SQL 
        // SELECT * FROM articles WHERE id = 1  
        // SELECT * FROM articles WHERE id = 1 ; DELETE * FROM articles ; // injecter du SQL 
        // piratage

        $this->send($data);

        $this->render("single"); // vue render => afficher / rendre 
        // créer le dossier article dans le dossier vue => créer le fichier single.php
        // MVC 

    }

}