<?php 

/*
présentation de 7 fonctions qui à utiliser pour modifier les variables / constantes qui contiennent de string 

str_replace($search , $replace , $subject);
ucfirst ( $string );
strtolower( $string ) ;
explode ( $separator , $string) ;
trim( $string , $characters ) ;
substr_replace($string ,"", -1); // remplacer le dernier caractère d'une chaine 
substr($big, 0, 100);
*/ 

$url = "http://localhost/index.php"; 

// prendre la variable $url et changer dedans le texte index.php par un autre texte presentation.html 
// tout en garder tout le reste de la chaine de caractère 
// $url2 = "http://localhost/presentation.html"; 

$url2 = str_replace("index.php","presentation.html", $url);
echo $url2 . "<br>";

// http://localhost/projet-php/jour1/05-string.php

// mettre la première lettre d'un string en majuscule
$prenom = "victor";
$auteur = ucfirst($prenom) ;
echo "$auteur Hugo <br>"; // echo $auteur . " Hugo <br>";

// mettre en minuscule toutes les lettre d'un string strtolower( $string ) ;
$information = "ATTENTION les AMIS"; 
echo strtolower($information) . "<br>"; // exécution et concaténation avec le . 

// explode ( $separator , $string) ; 
// permet de transformer un string en tableau indexé 0, 1, 2 de chaine de caractères utilisant un symbole particulière

$date = "12/01/2021"; // découper la variable date en un tableau ["12" , "01" , "2021" ]
var_dump( explode("/" , $date) );

// trim( $string , $characters ) ; // permet de supprimer des caractères au début et à la fin d'une chaine de caractères 

$description = "     bonjour les amis    ";
echo trim($description) . "<br>"; // supprimer les espaces au début de la chaine de caractères $description

$page_accueil = "/accueil/index.php/";
echo trim($page_accueil , "/") . "<br>" ; // supprimer les / en début et fin de la string $page_accueil

// nettoyer le début et la fin d'une chaine de caractère . 

/**
 * substr_replace($string ,"", -1); // remplacer le dernier caractère d'une chaine 
 *  substr($big, 0, 100);
 * 
 */

 $sql = "SELECT * FROM article ,"; // supprimer la virgule à la fin de la la variable $sql
 echo substr_replace($sql , "" , -1  ) . "<br>";

 // permet de prendre une partie d'une chaine de caractère 
// https://fr.lipsum.com/
 $texte = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet, nisl sit amet mollis mollis, ex odio luctus massa, nec aliquam arcu orci et metus. Ut ut feugiat nibh. Nam arcu libero, molestie non mauris nec, luctus aliquam orci. Curabitur aliquet dui in felis commodo, sed pulvinar est hendrerit. Donec eu sem sed mauris pulvinar posuere eu vel orci. Curabitur cursus magna sit amet leo scelerisque, eget auctor nisi venenatis. Quisque magna nisl, dictum at risus a, iaculis faucibus est. Suspendisse tincidunt purus a justo malesuada, vel sollicitudin risus finibus. Morbi nec sagittis turpis, at dignissim lacus. Nunc eget nisl massa. Nam urna diam, faucibus in vehicula in, porta non risus. Etiam non pharetra nulla, sed fringilla purus. Maecenas tristique purus venenatis orci placerat bibendum. Integer urna nunc, finibus eu nunc sed, mattis scelerisque nibh. Integer id turpis non tellus venenatis vulputate. " ; 

 // pour récupérer les 100 premières lettre du la variable $texte 

 echo substr($texte , 0 , 100) ."<br>"; 
 echo substr($texte , 0 , 50) ."<br>"; 
 echo substr($texte , 0 , 200) ."<br>"; 