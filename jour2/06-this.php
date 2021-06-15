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