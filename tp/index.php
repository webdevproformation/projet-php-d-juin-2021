<?php 

// Dispatcher 
// toutes les requêtes vont être orientées vers ce fichier (grâce au fichier  .htaccess)
//var_dump($_GET);

if( isset($_GET["page"])){
    // http://localhost/projet-php/tp/accueil/index => adresse de page d'accueil
    require "core/controller.class.php";
    require "core/app.class.php";
    require "core/bdd.class.php";

    $params = explode( "/" , trim( $_GET["page"] , "/") ); // accueil/index =>  ["accueil", "index"]

    $controller = ( empty( $params[0] ) ) ? "accueil" : strtolower($params[0]); // "accueil"
    $method = ( isset( $params[1]) ) ? strtolower($params[1]) : "index";  // "index"

    $controller_file = "controller/$controller.class.php"; // "controller/accueil.class.php"
    // l'adresse du fichier .php controller qui va être chargé 
    if(file_exists($controller_file)){
        require $controller_file;
        $class_name = ucfirst($controller) . "Controller" ; // "AccueilController"
        $c = new $class_name(); // créer un objet $c qui est une instance de AccueilController

        if(method_exists($c , $method)){
            $c->$method(); // exécuter la méthode index dans la class AccueilController
                       // $c->index()
        } else {
            App::erreur404();
            die(); 
        }

    } else {
        App::erreur404();
        die(); // mort exit() stopper net l'exécution du code 
    }
    var_dump($params) ;
}

// rdv dans 15 min => 15h35 bon café @ toute suite !!!!!!!!!!


