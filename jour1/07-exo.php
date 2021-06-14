<?php 

$homePage = [
    "http://domaine.fr/logo.jpg" ,
    "<h1>Titre principal</h1>" ,
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id ex ac risus blandit laoreet. Vestibulum tincidunt ultricies quam in semper. Mauris nisl diam, mattis a euismod ut, ultricies et eros. Aliquam vitae lacinia elit. Phasellus nec consequat odio. Cras fringilla odio nec orci volutpat, quis dictum augue tempor. Vivamus in feugiat tellus, a aliquet neque. Ut sapien mi, blandit quis luctus sed, dapibus in lorem. Nullam hendrerit blandit elit, et placerat urna consectetur in."
];
$element1 = explode("/", $homePage[0]);

$element2 = str_replace("<h1>", "", $homePage[1]); // enlevé la balise ouvrante
$element2 = str_replace("</h1>", "" , $element2) ; // enlevé la balise fermante

$element3 = str_replace("in"  , "out",  $homePage[2] );

$homePage = [
    $element1 ,
    $element2 ,
    $element3
] ;
var_dump($homePage);
// http://localhost/projet-php/jour1/07-exo.php

// 08-xdebug.php
