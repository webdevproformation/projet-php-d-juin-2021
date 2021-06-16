<?php 
// http://localhost/projet-php/tp/accueil/index
class AccueilController extends Controller{

    public function index(){

        //echo "Bienvenu sur mon site !";
        $data = [ 
            "titre" => "Bienvenu",
            "articles" => [
                ["id"=> 1 , "titre" => "article 1" , "contenu" => "lorem ipsum"],
                ["id"=> 2 , "titre" => "article 2" , "contenu" => "lorem ipsum"],
                ["id"=> 3 , "titre" => "article 3" , "contenu" => "lorem ipsum"],
                ["id"=> 4 , "titre" => "article 4" , "contenu" => "lorem ipsum"],
                ["id"=> 5 , "titre" => "article 5" , "contenu" => "lorem ipsum"]
            ]
        ];

        $this->send($data); // envoyer les données dans la vue sélectionnée par la méthode render()

        $this->render("home"); // choisir la vue
        // créer le dossier accueil dans le dossier vue
        // 

    }

}