<?php 
// http://localhost/projet-php/tp/accueil/index
class AccueilController extends Controller{

    public function index(){

        //echo "Bienvenu sur mon site !";
        $data = [ 
            "titre" => "Bienvenu",
            "articles" => Bdd::getPdo()->query("SELECT * FROM articles")
        ];

        var_dump($data);
        die();

        $this->send($data); // envoyer les données dans la vue sélectionnée par la méthode render()

        $this->render("home"); // choisir la vue
        // créer le dossier accueil dans le dossier vue
        // 

    }

}