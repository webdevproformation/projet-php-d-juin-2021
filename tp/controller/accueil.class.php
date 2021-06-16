<?php 
// http://localhost/projet-php/tp/accueil/index
class AccueilController extends Controller{

    public function index(){

        //echo "Bienvenu sur mon site !";
        $this->render("home");
        // créer le dossier accueil dans le dossier vue
        // 

    }

}