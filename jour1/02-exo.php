<?php 

// créer une variable qui s'appelle date est qui contient le texte suivant 14/06/2021
// créer une autre variable qui s'appelle duree est qui contient  5 jours

// créer une autre variable qui s'appelle sommaire est qui contient  les 4 valeurs suivantes : 
                        // variable , constante, fonction, fonction natives de PHP

// créer une autre variable qui s'appelle cv est qui contient les 4 valeurs suivantes :
            // indexé par la string prenom valeur Alain
            // indexé par la string age valeur 34
            // indexé par la string experience valeur true
            // indexé par la string competence valeur un tableau ayant les valeurs suivantes 
            //                                 js , php , ajax

$date = "14/06/2021" ;
$dateV2 = 14 . "/0" . 6 . "/" . 2021 ; 
$date = "14.06.2021" ;
$date = "14 06 2021" ;

$duree = "5 jours" ;

$sommaire = ["variable" , "constante" , "fonction" , "fonction natives de PHP"] ;

// tableau associatif écrit sur une ligne 
$cv = [  "prenom" => "Alain", "age" => 34 , "experience" => true , "competence" => ["js", "php", "ajax"]  ];

// tableau associatif sur plusieurs lignes => beaucoup plus lisible
$cv = [  
        "prenom"        => "Alain", 
        "age"           => 34 , 
        "experience"    => true , 
        "competence"    => ["js", "php", "ajax"]  
    ];

// $cv est un tableau associatif qui contient un index "competence" qui est lui même un tablean indexé

// créer dans le dossier jour1 un nouveau fichier 03-constantes.php