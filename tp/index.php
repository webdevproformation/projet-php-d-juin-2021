<?php 

// Dispatcher 
// toutes les requêtes vont être orientées vers ce fichier (grâce au fichier  .htaccess)

if( !empty($_GET["page"])){
    // http://localhost/projet-php/tp/accueil/index => adresse de page d'accueil
    require "core/controller.class.php";

    $params = explode( "/" , $_GET["page"] ); // accueil/index =>  ["accueil", "index"]

    $controller = $params[0]; // "accueil"
    $method = $params[1];  // "index"

    $controller_file = "controller/$controller.class.php"; // "controller/accueil.class.php"
    // l'adresse du fichier .php controller qui va être chargé 

    if(file_exists($controller_file)){
        require $controller_file;

        $class_name = ucfirst($controller) . "Controller" ; // "AccueilController"
        $c = new $class_name(); // créer un objet $c qui est une instance de AccueilController

        $c->$method(); // exécuter la méthode index dans la class AccueilController
                       // $c->index()

    } else {
        echo "ERREUR 404";
        die(); // mort exit() stopper net l'exécution du code 
    }
    var_dump($params) ;
}

