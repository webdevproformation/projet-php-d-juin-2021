<?php 

$adresse = "75 rue du Paradis";
$cp = 75010 ;
$ville = "Paris";

define("METRO" , "Denfert Rochereau");
define("BUS" , 123);

// 1ère solution possible utilisant les apostrophes et le symbole \ pour échapper les apostrophes dans les apostrophes dans le texte
function localisation(){
    global $adresse , $ville ;
    // // j'habite au 75 rue du Paradis à Paris et je te conseille d'utiliser le Bus 123 pour venir chez moi 
    $phrase = 'j\'habite au '.$adresse.' à '. $ville . ' et je te conseille d\'utiliser le Bus ' . BUS . ' pour venir chez moi ';
    echo $phrase ;
}
localisation();

// http://localhost/projet-php/jour1/04-exo.php
// Utiliser les guillemets => $varible 

function localisation2(){
    global $adresse , $ville ;
    $phrase = "j'habite au $adresse à $ville et je te conseille d'utiliser le Bus ". BUS . " pour venir chez moi ";
    echo $phrase ;
}
localisation2();

function localisation3(){
    global $adresse , $ville ;
    $phrase = "j'habite au " . $adresse . " à " . $ville . " et je te conseille d'utiliser le Bus ". BUS . " pour venir chez moi ";
    echo $phrase ;
}
localisation3();

// 05-string.php
