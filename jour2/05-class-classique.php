<?php 
// 05-class-classique.php 
// http://localhost/projet-php/jour2/05-class-classique.php

// en php pour créer une class class 

class Exemple{ // créer une class vide 
    // dans une class, à l'intérieur des accolades deux grands types => 
    // propriétés / attributs de class => variable 

    public $duree = 20 ;
    public $nom = "découverte des class en PHP";

    // fonction => méthode 

    public function description(){
        var_dump("je découvre les class en php");
    }
    // membre de la class = l'ensemble des propriétés / attributs et des méthodes stockées dans la class 
}

$e = new Exemple(); // la variable $e contient une instance de la class Exemple 
                    // $e est une objet 
var_dump($e); 

/**
 * uniquement les propriétés de l'objet
 * object(Exemple)[1]
  public 'duree' => int 20
  public 'nom' => string 'découverte des class en PHP' (length=28)
 * 
 */

// obtenir les méthodes disponibles de l'objet $e get_class_methods()
var_dump(get_class_methods($e)); 

// pouvez vous me donner l'ensemble des méthodes de la class PDO ??? 

var_dump(get_class_methods(new PDO("mysql:dbname=commerce;host=localhost;charset=utf8","root","")));

// rdv 13h33 bon app @ tout suite !! 

// 06-this.php