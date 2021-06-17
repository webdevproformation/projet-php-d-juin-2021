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

        $this->render("ajouter");

    }

}
