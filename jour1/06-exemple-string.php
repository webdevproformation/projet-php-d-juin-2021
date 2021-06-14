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

// cas pratique crée le fichier 07-exo.php dans le dossier jour1

// créer une variable tableau indexé
//    cette variable s'appelle homePage qui contient les valeurs suivantes  : 

//    "http://domaine.fr/logo.jpg",

//    <h1>Titre principal</h1>

//    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id ex ac risus blandit laoreet. Vestibulum tincidunt ultricies quam in semper. Mauris nisl diam, mattis a euismod ut, ultricies et eros. Aliquam vitae lacinia elit. Phasellus nec consequat odio. Cras fringilla odio nec orci volutpat, quis dictum augue tempor. Vivamus in feugiat tellus, a aliquet neque. Ut sapien mi, blandit quis luctus sed, dapibus in lorem. Nullam hendrerit blandit elit, et placerat urna consectetur in. 

// 1 transformer le 1er item du tableau en un tableau indexé via la symbole / et le remplacer à l'index 0 du tableau homePage

// 2 supprimer la balise h1 ouvrante et fermante pour le 2ème item du tableau

// 3 remplacer toutes les occurences du mot "in" par le mot "out"

