<?php 

// 06-exemple-string.php

// créer une fonction


function calcul (){
    echo 10 * 2 ."<br>"; // 20
} 
// exécuter ma fonction
calcul(); 

// http://localhost/projet-php/jour1/06-exemple-string.php

$mon_fonction = "calcul";

// exécuter ma fonction
$mon_fonction(); // php va remplacer $mon_fonction par "calcul"()


// création d'une class
class Exemple {
    public function soustraction(){
        echo 50 - 15 . "<br>";
    }
}

$c = new Exemple(); // objet $c = instance de la class Exemple
$c->soustraction(); // exécuter la méthode dans l'instance 

// autre manière de faire la même instruction 

$action = "exemple/Soustraction";

$params = explode("/", $action); // ["exemple" , "Soustraction"] ;

$className = ucfirst($params[0]) ; // "Exemple" 
$methode = strtolower($params[1]); // "soustraction"

// minuscule : lowercase
// majuscule : uppercase 

$d = new $className() ; // new Exemple()
$d->$methode(); // $d->soustraction()



