<?php 
// http://localhost/projet-php/jour2/08-class-statique.php
define("INFO", 10);
class App{
    public const STATUS = 100000; // constante de class
    // attribut statique
    public static $instance = "information";
    public function information(){
        return self::STATUS + 2 ;
        // le mot clé self fait référence à la class App 
    }
    public function information2(){
        return self::$instance ;
        // le mot clé self fait référence à la class App 
    }
    // méthode statique
    public static function information3(){
        var_dump("je suis une méthode statique");
    }
}
// App::STATUS = "ablabal";
var_dump(App::STATUS); // utilisation de la constante de class hors de la class
App::$instance = 30; 
var_dump(App::$instance);// utilisation d'un attribut static de class hors de la class
App::information3() ; 
/* $e = new App();
$e->information(); */

// 09-heritage.php