<?php 
// controller/admin.class.php
// render()
// send()
// héritage class Pere => class Enfant

class AdminController extends Controller{

    public function accueil(){

        // créer une variable $data qui est un tableau => requête en base de données

        $data = [
            "titre" => "Accueil du Back Office",
            "articles" => Bdd::getPdo()->query("SELECT * FROM articles")
        ];
        
        $this->send($data) ;

        $this->render("accueil");
        // créer dans le dossier vue / admin / accueil.php 

    }

    public function ajouter(){

        // var_dump($_POST);
        // pour l'ouverture de la page par défaut $_POST est vide => est ce que $_POST n'est pas vide
        // vérifier que les champs titre et contenu sont remplis = contiennent 
        // strlen() string length => nom de caractère d'une string 
        if(!empty($_POST) && strlen($_POST['titre']) > 0 &&  strlen($_POST['contenu']) > 0){

            // si les 3 conditions du if sont vérifiées en même temps => ajouter un nouvel article dans notre base de données 
            // INSERT insérer une nouvelle ligne dans une table 

            $sql = "INSERT INTO articles ( titre , contenu) VALUES ( :titre , :contenu ) ";
            Bdd::getPdo()->query( $sql , $_POST);
            // redirection php 
            header("Location: ".WWW."admin/accueil");

        }
        $this->render("ajouter");

    }

    public function suppr( $id = null ){
        // SQL 
        $sql = "DELETE FROM articles WHERE id = :id";
        Bdd::getPdo()->query($sql , ["id" => $id]);
        header("Location: ".WWW."admin/accueil"); // redirection vers la page d'accueil du site 
        // header("Location: http://localhost/projet-php/tp/admin/accueil");
        // WWW constante qui est disponible dans le fichier index.php 
    }

}
