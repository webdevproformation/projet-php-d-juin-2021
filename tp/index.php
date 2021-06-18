<?php 
session_start();
// Dispatcher 
// toutes les requêtes vont être orientées vers ce fichier (grâce au fichier  .htaccess)
//var_dump($_GET);

if( isset($_GET["page"])){
    // http://localhost/projet-php/tp/accueil/index => adresse de page d'accueil
    // mysql:dbname=demo;charset=utf8;host:locahost:3307
    //var_dump($_SERVER);
    // symfony / cakephp / laravel PHP =>
    // ruby on rail => Ruby  => MVC 
    $protocole = $_SERVER['REQUEST_SCHEME']; // http
    $domaine = $_SERVER['HTTP_HOST']; // localhost
    $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : ":" . $_SERVER["SERVER_PORT"] ; // 8888
    // if ternaire 
    $path = str_replace("index.php", "", $_SERVER['PHP_SELF']); //  projet-php/tp/
    // die();

    define("WWW" , "$protocole://$domaine$port$path"  ); 
    //var_dump(WWW); die();

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
            // $c->$method(); // exécuter la méthode index dans la class AccueilController
                       // $c->index()
            $params = array_splice($params, 2);
            call_user_func_array([$c, $method] , $params);
        } else {
            App::erreur404();
            die(); 
        }

    } else {
        App::erreur404();
        die(); // mort exit() stopper net l'exécution du code 
    }
   // rdv 13h30 !! bon appétit 
}

// rdv dans 15 min => 15h35 bon café @ toute suite !!!!!!!!!!


