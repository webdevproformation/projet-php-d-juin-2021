<?php 

// commentaire en php 
// tout code php commence par la balie ouvrant <?php 

// si vous avez un fichier php qui ne contient QUE DU CODE PHP il est conseillé de ne pas mettre la balise fermante 

// header("Location: "); => fonction du langage php qui permet de faire des redirections => il ne faut pas avoir un espace AVANT ce type de fonction 

// aucun code html dedans 

// si je suis amené à écrire du php et du html dans le même fichier alors il faudra fermer la balise php 

// git github avec Visual 
// git init
// git add 
// git commit
// git push

// pour résoudre un problème on va le découper en variables 
// en php pour créer une variable 

$auteur = "Victor Hugo" ; // attention ne pas oublier le ; à la fin de l'instructions

$auteur="Victor Hugo"; // les espaces avant et après le symbole = ainsi que l'espace avant le symbole ; sont facultatifs => permet d'aérer le code

// attention si vous mettez des espaces entre les guillemets (double quote) " "

// attention cette instruction n'est plus la même 
$auteur = " Victor  Hugo "; // espace méta caractère espace d'écarter les lettres // aérer le code  

// variable de type string => chaine de caractères 

// deuxième manière de créer des string en php c'est d'utiliser le symbole apostrophe 

$marque = 'Renault'; // utilisation de l'apostrophe pour délimiter ma chaine de caractère 

// chiffres 
$nombre = 2 ; // nombre entier => integer 
$prix = 12.5 ; // chiffre à virgule => float double 
$temperature = -12.4 ; // chiffre à virgule négatif pas besoin d'espace entre le symbole - et le chiffre

// boolean 

$isAdmin = true ; // true ce n'est pas du texte c'est un mot clé du langage PHP 
$verif = false ; // false est n'est pas un string c'est mot clé du langage PHP 

// variables complexes => tableaux => array 

// en PHP il existe deux types de tableau : tableaux indexés et les tableaux associatifs 

// tableaux indexés

$courses = ["pomme", "poire", "abricots"];
//            0         1         2

// dans la variable $courses vous avez stocker 3 string et chaque élément, item, texte est accessible via sa position dans le tableau 

// tableaux associatifs 

$budget = [ "formation" => 120 , "transport" => 30 , "dejeuner" => 50 ];

//                 "formation"   ,    "transport"   ,    "dejeuner"

$budget=["formation"=>120,"transport"=>30,"dejeuner"=>50];

// dans la variable $budget vous avez stocker 3 nombres et chaque élément, item, nombre est accessible via son nom dans le tableau 
// le texte avant le chiffre avec le symbole flêche => indexé nommé 

// class et les objets 
// super variable class 

class Formation{ // l'espace entre le mot class et le mot Formation est OBLIGATOIRE
                 // convention d'écrire // convention de nommage 
                 // lorsque je vais créer de class le nom de la class va prendre la 1ère lettre en majuscule  
};

// à partir d'une class , nous allons pouvoir récréer une instance de class => objet 

$f = new Formation();  // l'espace entre le new et Formation est OBLIGATOIRE 
                        // les deux autres espaces sont facultatifs 

// cas pratique 
// créer dans le dossier jour1 le fichier 02-exo.php 

// dans ce fichier vous allez créer les variables suivantes 

// créer une variable qui s'appelle date est qui contient le texte suivant 14/06/2021
// créer une autre variable qui s'appelle duree est qui contient  5 jours

// créer une autre variable qui s'appelle sommaire est qui contient  les 4 valeurs suivantes : 
                        // variable , constante, fonction, fonction natives de PHP

// créer une autre variable qui s'appelle cv est qui contient les 4 valeurs suivantes :
            // indexé par la string prenom valeur Alain
            // indexé par la string age valeur 34
            // indexé par la string experimente valeur true
            // indexé par la string competence valeur un tableau ayant les valeurs suivantes 
            //                                 js , php , ajax

// rdv 10h45 => laisser 5 min pour finir l'exo 

