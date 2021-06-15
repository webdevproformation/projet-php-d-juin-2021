<?php 
// http://localhost/projet-php/jour2/09-heritage.php

// concept central lorsque l'on fait de la POO 
// éviter de dupliquer du code entre différentes class 

// class Parent => methode et les attributs communes à toutes les class 
// un ou plusieurs class enfant (héritiers) qui vont définir des attributs et des méthodes spéciales à elles
// entre les différents enfants 

// exemple 
class Pere{ // attention le mot parent est déjà un mot clé utilisé comme $this true false for foreach 
    public $age ;
    public $nom ; 

    public function __construct(int $age , string $nom){
        $this->age = $age;
        $this->nom = $nom;
    }
    public function isAdult(){
        if($this->age <= 18 ){
            return "Enfant";
        }
        return "Adulte";
    }
}
class Enfant extends Pere{}
$e = new Enfant(12 , "Pierre");
var_dump($e);
var_dump(get_class_methods($e));

class Etudiant extends Pere{
    public function passerLePermisDeConduire(){
        $verif = $this->isAdult(); // utilisation d'une fonction dans le parent dans une méthode dans l'enfant
        if($verif == "Enfant"){
            return "Permis accompagné";
        }
        return "Permis classique";
    }
}
$etudiant = new Etudiant(19, "Michel");
var_dump($etudiant->passerLePermisDeConduire() );

// lorsque l'enfant va hérité et modifier une ou plusieurs méthodes / propriétés => polymorphisme

class Ado extends Pere{
    public $adresse ;

    public function __construct(int $age , string $nom , string $adresse){
        parent::__construct($age , $nom); // exécute la fonction __construct qui est stockée dans la class Pere (dont tu hérites => extends)
        $this->adresse = $adresse ;
    }
    // héritage et évolution 
}

$a = new Ado(14 , "Béatrice", "75 rue du Paradis" );

var_dump($a);