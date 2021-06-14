<?php 

// 03-constantes.php

// aujourd'hui => rappel / présenter une liste de fonction / syntaxe de base en PHP à connaitre 
// à partir de demain => projet Blog 
// => base de données => PDO 
// => MVC  Model Vue Controller en programmation Orienté Objet

// constante = ressemble à une variable mais comme son nom l'indique 
// une fois que l'on a donné la valeur à la constante => on ne peut plus la modifier 
// la langage PHP qui va GARANTIR que la valeur ne va pas être modifiée

// puor créer une constante, il faut utiliser une fonction PHP define(); 
// prend deux paramètres 
//   nom de la constante notez "MAJUSCULE" 
//  valeur de la constate

define("NOM", "Atelier PHP");  // $NOM = "Atelier PHP"; 

// const NOM = "text"; en javascript 
// const peut être utiliser dans les class

echo NOM ;  // étant donné que la NOM est une constante PHP il ne faut PAS mettre de symbole $ devant

// erreur de type Notice: Undefined variable: NOM si vous écrivez echo $NOM ;
// démarrer les services apache et mysql 

// windows : http://localhost/projet-php/jour1/03-constantes.php
// MacOS : http://localhost:8888/projet-php/jour1/03-constantes.php

// deux avantages à créer des constantes

// define("NOM", "modification"); //  Notice: Constant NOM already defined

// variable globale ?? 

function description(){
    echo "<br> je suis dans la fonction " . NOM ; // j'utilise la constante dans la définition / déclaration de la fonction description
}
description(); // appel de la fonction 

$duree = 10 ; // variable qui commence par le symbole $

function calcul (){ 
     global  $duree ; // il faut ajouter cette ligne qui va dire à PHP OK tu peux utiliser la variable $duree 
                     // Notice: Undefined variable: duree
    echo "<br>" .$duree * 2 ;
}
calcul();

// créer le fichier 04-exo.php 

// dans ce fichier créer les variables suivantes : 
// adresse  75 rue du Paradis
// cp 75010
// ville Paris

// créer dans ce fichier deux constantes 
// METRO  Denfert Rochereau
// BUS 123 

// créer une fonction qui va faire afficher dans le navigateur (Firefox / chrome) la phrase suivantes 

// j'habite au 75 rue du Paradis à Paris et je te conseille d'utiliser le Bus 123 pour venir chez moi 

// utiliser les constantes et les variables créé précédemment pour écrire cette phrase !! 


