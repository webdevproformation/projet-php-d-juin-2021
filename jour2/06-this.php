<?php 
// http://localhost/projet-php/jour2/06-this.php

class Formation {

    public $sommaire = [];
    public $duree ; 

    public function __construct(array $sommaire , int $duree){
        // la variable $this what is it ??? 
        // $this fait référence à l'objet de l'on va instancier
        $this->sommaire = $sommaire;
        $this->duree = $duree; 
        var_dump("dans la constructeur",$this);
    }

    public function description(){
        return $this->sommaire;
    }
}

$f = new Formation(["js","php"] , 10);

var_dump($f);
var_dump($f->sommaire); // utilise à l'extérieur de la class directement dans un objet

var_dump($f->description()); 

// cas pratique :

// créer le fichier 07-exo.php 

// créer une class 
// nom Personnage 
// cette class dispose de 2 membres 
// vie = 10 (attribut)
// frapper ( autre_personnage ) 
// lorsque le personnage va frapper ça va réduire de - 2 la vie de autre_personnage

// créer un premier personnage magicien => instance de class Personnage
// créer un deuxieme personnage guerrier => instance de class Personnage

// le magicien va frapper 2 fois le guerrier
// le guerrier va frapper 3 fois le magicien 

// afficher les points de vie du guerrier (6) et du magicien (4)