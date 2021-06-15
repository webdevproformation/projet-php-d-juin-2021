<?php 

// isset()
// empty() =>  '',"",null,array(),FALSE,NULL,'0',0 
// is_numeric()
// in_array( $ceQuiEstRecherche , $tableau )

// filter_var( $email , FILTER_VALIDATE_EMAIL)

// isset() => est ce que la variable existe ?? a été déclarée / créé avant 

$premier = ""; // créer une variable 

// http://localhost/projet-php/jour2/02-boolean.php

var_dump(isset($premier)) ; // true 
var_dump(isset($message)); // false

$formation = [ 
    "duree" => 5 ,
    "nom" => "php avancée" 
];
// isset permet de vérifier la présence d'une key dans un tableau associatif
// est ce que dans le tableau associatif j'ai un index nommé qui s'appelle unite ??
$verif = isset ($formation["unite"]);
var_dump($verif);

// est ce que dans $_SERVER j'ai l'index nommé "HTTP_HOST"
$verif2 = isset($_SERVER[ "HTTP_HOST" ]);
var_dump($verif2); // true

var_dump($toto); // Notice: Undefined variable: toto

// ça ne sert à rien décrire 
var_dump( isset($_GET) , isset($_POST) , isset($_SERVER) );
// ces super globales sont crées automatiquement par PHP 

// ------------------

// est ce qu'une variable est vide ??? 
// à ne pas confondre avec est ce qu'une variable existe ?? 
// Attention ce n'est pas la même chose !!!! 

// permet de vérifier est ce que une variable est vide ??? 
// '',"",null,array(),FALSE,NULL,'0',0 

$description = "";
$verif3 = empty($description);   // true
var_dump($verif3);

$budget = [  ];
$verif4 = empty($budget); // true
var_dump($verif4); 

$verif5 = empty($toto);  // null 
var_dump($verif5); // true

$verif6 = isset($toto) && empty($toto);
        // false       &&   true
        //       false
var_dump($verif6);

// en php is_numeric() flexible 

$verif7 = is_numeric(10);
var_dump($verif7); // true

$verif8 = is_numeric("10");
var_dump($verif8); // true ???? pour les chiffres entourés de double quote / apostrophe

$type = gettype("10"); 
var_dump($type);

if( gettype("10") == "integer"){ // 1 entier => integer 1.2 reel => float double 
    var_dump("c'est bien un chiffre");
}else {
    var_dump("ce n'est pas un chiffre");
}

// in_array( $ceQuiEstRecherche , $tableau )
// fonction qui permet de vérifier est ce que une valeur est contenue dans le valeurs d'un tableau (associatif ou indexé)

// vérifier la nationalité d'une personne 
// il doit saisir deux lettres fr 

$saisi = "fr";
// Fr FR fR fr

if( $saisi == "Fr" || $saisi == "FR" || $saisi == "fR" || $saisi == "fr"){

}

$nationalite = ["Fr" , "FR" , "fR" , "fr"];
if(in_array($saisi , $nationalite)){

}
// https://webdevpro.net/raccourcis-clavier-pour-coder-sur-macos/


// filter_var( $email , FILTER_VALIDATE_EMAIL)

$email = "coucou@yahoo.fr";
$verif9 = filter_var( $email , FILTER_VALIDATE_EMAIL);
var_dump($verif9); // retourner le email

$email2 = "coucou@yahoofr";
$verif10 = filter_var( $email2 , FILTER_VALIDATE_EMAIL);
var_dump($verif10); // false

$email3 = "coucou@yahoo.fr";
$verif11 = !!filter_var( $email3 , FILTER_VALIDATE_EMAIL);
var_dump($verif11); // true au lieu d'avoir un email


// !true => false 
// !"coucou" => false
// !!"coucou@yahoo.fr" => !false => true