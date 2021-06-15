<?php 

// Dispatcher 
// toutes les requêtes vont être orientées vers ce fichier (grâce au fichier        .htaccess)

if( !empty($_GET["page"])){
    // http://localhost/projet-php/tp/accueil/index
    var_dump($_GET["page"]) ;
}

