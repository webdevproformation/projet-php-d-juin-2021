<?php 
 
  // partie 1

 $chiffre1 = "2" ;
 $chiffre2 = 2 ;
 $chiffre3 = $chiffre2 + $chiffre1 ; //  2 + "2" = 2 + 2 = 4 // pas comme en javascript "22"
 $chiffre4 = $chiffre2 === $chiffre1 ; // false
 $chiffre5 = $chiffre1 - $chiffre2; // "2" - 2 = 2 - 2 = 0  
 var_dump($chiffre1 , gettype($chiffre1));
 var_dump($chiffre2 , gettype($chiffre2));
 var_dump($chiffre3 , gettype($chiffre3));
 var_dump($chiffre4 , gettype($chiffre4));
 var_dump($chiffre5 , gettype($chiffre5));

 // http://localhost/projet-php/jour2/03-exo.php

 // partie 2
  $premier = "Bonjour" ;
  $deuxieme = 3 ;

  if(gettype($premier) == "string" && strlen($premier) == 20 ){
    var_dump('$premier est conforme');
  }

  if(gettype($deuxieme) == "string" || strlen($deuxieme) == 20 ){
    var_dump('$deuxieme est quasi conforme');
  }else{
    var_dump('$deuxieme n\'est pas conforme à 100%');
  }