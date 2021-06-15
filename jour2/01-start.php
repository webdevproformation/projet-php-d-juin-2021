<?php 

// utiliser une super globale 
// $_GET / $_POST / $_SESSION / $_COOKIE 
// il faut respecter la casse => il faut écrire ces variables en majuscules 
// $_get ce n'est pas la même chose que $_Get ou encore $_GET

// toutes ces variables sont des tableaux associatifs 

// http://localhost/projet-php/jour2/01-start.php

// $_SERVER 
function dd($d){
    echo "<pre>";
    var_dump($d);
    echo "</pre>";
}

var_dump($_SERVER);
// "bonjour" == ["hello", "bonjour"]
// in_array("bonjour" ,  ["hello", "bonjour"]);

// est ce que $_SERVER possède la clé HTTP_HOST ?
// solution 1 : array_keys() et in_array()
var_dump(array_keys($_SERVER)) ; // 
var_dump(in_array("HTTP_HOST" , array_keys($_SERVER)));

// solution 2 : array_key_exists() 
var_dump(array_key_exists( "HTTP_HOST" , $_SERVER));

// solution 3 boucle foreach 
$verif = false ;
foreach($_SERVER as $key => $valeur){
    if($key == "HTTP_HOST"){
        $verif = true;
    }
}
var_dump($verif);

// Question 2 : 

// http://localhost:8888/projet-php/jour2/01-start.php

// http => $_SERVER["REQUEST_SCHEME"]
//  ://
// localhost => $_SERVER["HTTP_HOST"]
// :8888   => ":".$_SERVER["SERVER_PORT"]
// /projet-php/jour2/01-start.php   =>  $_SERVER["PHP_SELF"]


$url_page_encours = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["HTTP_HOST"] . ($_SERVER["SERVER_PORT"] == "8888" ? ":".$_SERVER["SERVER_PORT"] : "") . $_SERVER["PHP_SELF"] ; 

var_dump($url_page_encours);

var_dump(count($_SERVER)); // 43

$params = explode("/",$_SERVER["SERVER_SOFTWARE"]);
$versionPHP = end($params);
var_dump($versionPHP);

var_dump(explode(";",$_SERVER["PATH"])); // C:\xampp\php

// 02-boolean.php dans le dossier jour2