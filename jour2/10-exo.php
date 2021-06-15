<?php 

// http://localhost/projet-php/jour2/10-exo.php

class Personnage {
    public $nom ;  //string
    public $vie ;  //chiffre entier positif
    public $actif ;  //boolean
    public $exp  ; // chiffre entier positif
    public function __construct(string $nom, int $vie , bool $actif , int $exp){
        $this->nom = $nom;
        $this->vie = $vie ;
        $this->actif = $actif;
        $this->exp = $exp;
    }
    public function attaquer(){
        return $this->nom ;
    }
}

class Magicien extends Personnage{
    public $mana ; 
    public function __construct(
                    string $nom , 
                    int $vie , 
                    bool $actif , 
                    int $exp , 
                    int $mana
                )
    {
        parent::__construct($nom , $vie , $actif , $exp);
        $this->mana = $mana; 
    }

    public function attaquer(){
        $attaque = number_format( $this->mana* $this->exp , 0, ",", " " );
        return parent::attaquer() . " a une puissance d'attaque de $attaque " ;
    }
}

class Guerrier extends Personnage{
    public $force ; 
    public function __construct(
                    string $nom , 
                    int $vie , 
                    bool $actif , 
                    int $exp , 
                    int $force
                )
    {
        parent::__construct($nom , $vie , $actif , $exp);
        $this->force = $force; 
    }
    public function attaquer(){
        $attaque = number_format( $this->force* $this->exp , 0, ",", " " );
        return parent::attaquer() . " a une puissance d'attaque de $attaque " ;
    }
}
$m = new Magicien("Oz" , 30, true , 1000, 60 );
$g = new Guerrier("Xena" , 40, false , 2000, 50 );
var_dump($m->attaquer()); // 1000 * 60
var_dump($g->attaquer()); // 2000 * 50