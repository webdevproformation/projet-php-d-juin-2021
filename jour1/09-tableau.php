<?php 

// en php il existe deux types de tableaux 

// indexe / numéroté

// associatifs / index nommé 

// des fonctions natives dans php pour les manipuler 

// array_keys ( $array );
// array_sum( ) ;
// array_merge( $tab1, $tab2 ); 
// count() ;
// array_splice ($array, $offset, $length) ;
// extract()
// current()
// end()

// array_keys ( $array ); => prendre un tableau associatif => récupérer que les clés dans un tableau 

$formation = [ 
    "nom" => "site dynamique en php",
    "duree" => 5,
    "unite" => "jours"
];
function dd($d){
    echo "<pre>";
    var_dump($d);
    echo "</pre>";  
}
$formation_keys = array_keys($formation);
dd($formation_keys);

// http://localhost/projet-php/jour1/09-tableau.php

// array_sum( ) ; // permet de faire la somme des éléments dans un tableau indexé

$prix = [12.3 , 14.6, 22 , 44.1] ; // somme 12.3 + 14.6 + 22 + 44.1

// première manière de faire => boucle 
$total = 0 ;
foreach($prix as $p){
    $total += $p;
}
var_dump($total);
dd($total);

// la deuxième manière de faire => array_sum()
$total2 = array_sum($prix);
var_dump($total2);
dd($total2);

// array_merge( $tab1, $tab2 );  fusionner deux tableaux 

$tableau1 = [1,2,3,4];
$tableau2 = ["a","b","c"];
$tableau3 = array_merge($tableau1 , $tableau2);

var_dump($tableau3); // [1,2,3,4,"a","b","c"]
dd($tableau3);

// cas praticulier avec la fonction array_merge() => avec tableau associatif 

$etudiant = [ 
    "prenom" => "Alain",
    "age" => 12,
    "adresse" => "75 rue du Paradis"
];

$etudiant_suite = [
    "age" => 42,
    "cv" => "formation auprès de Doranco"
];

$etudiant_complet = array_merge($etudiant , $etudiant_suite);
var_dump($etudiant_complet);
dd($etudiant_complet); // si tableau associatif qu'il y a dans les deux le même nom d'index alors le dernier qui est écrit qui est conservé dans le tableau associatif fusionné 

// // count() ; permet de savoir combien il y a d'éléments dans un tableau 

var_dump(count($etudiant_complet ));
dd(count($etudiant_complet )); // [].length 

// array_splice ($array, $offset, $length) ; 
// permet d'enlever une partie d'un tableau 

$adresse = [ 
    "index.php",
    "accueil", // 1
    "view",
    "3"
];

// supprimer le 1er item du tableau et ne garder que les 3 derniers éléments 
$adresse_propre = array_splice($adresse, 1);
var_dump($adresse_propre);
dd($adresse_propre);

// tableau qui contient 1 seul élément 

class Formation{
    public $data = 12;
}

// SELECT * FROM articles WHERE id = 1 ; 


$tableau = [ new Formation() ]; // collection 

var_dump($tableau[0]->data); // [1er élément]->proprietePublic
dd($tableau[0]->data);


$tableau = current( $tableau ); // sélectionner le 1er élément dans un tableau
var_dump($tableau->data);
dd($tableau->data);

// end() => je veux récupérer le dernier élément d'un tableau indexé ou associatif

$date = "12/02/2021"; // récupérer l'année 

// 1ère étape explode() ma string 

$date = explode("/", $date);
var_dump($date); // ["12", "02", "2021"]

var_dump(end($date)); // récupérer la dernière valeur => "2021"

// cas pratique 

var_dump($_SERVER); // tableau généré automatiquement par PHP 
dd($_SERVER);

// créer le fichier 10-exo.php 

// utiliser la variable super globale $_SERVER 

// 1 est ce que ce tableau associatif dispose de la key => HTTP_HOST ?
// 2 à partir de cette variable reconstituer l'url du fichier en cours d'exécution 
    // http://localhost/projet-php/jour1/10-exo.php
// 3 combien d'élément contient cette super globale
// 4 pouvez vous me récupérer la version de PHP qui est actuellement utilisé dans votre système ??
// 5 récupérer le contenu de l'item PATH et transformer en tableau indexé via le symbole ;  
