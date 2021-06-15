<?php 

// http://localhost/projet-php/jour2/07-exo.php

class Personnage{
    public $vie = 10 ;
    public function frapper( Personnage $autre_personnage ){
        $autre_personnage->vie -= 2;
        $id = spl_object_id($autre_personnage);
        $lui = get_class($this);
        $id_lui = spl_object_id($this);
        $autre = get_class($autre_personnage);
        echo "$lui $id_lui a frappe $autre $id <br>";
       // $autre_personnage->vie = $autre_personnage->vie - 2;
    }
}   
class Toto{}

$magicien = new Personnage(); // 1
$guerrier = new Personnage(); // 2

// $magicien->frapper( new Toto()); // Fatal error: Uncaught TypeError: Argument 1 passed to Personnage::frapper() must be an instance of Personnage, instance of Toto given,
$magicien->frapper( $guerrier );
$magicien->frapper( $guerrier );

$guerrier->frapper( $magicien );
$guerrier->frapper( $magicien );
$guerrier->frapper( $magicien );
var_dump($magicien); // 4
var_dump($guerrier); // 6