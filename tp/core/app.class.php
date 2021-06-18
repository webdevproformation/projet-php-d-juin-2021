<?php 
// core/app.class.php
// class utilitaire => stocker des fonctions qui vont être utilisée dans notre projet 
class App{

    static function erreur404(){
        header("HTTP/1.1 404 Not Found"); // moteur de recherche 
        ob_start();
        require "vue/404.php";
        $content_for_template = ob_get_clean();
        require "vue/template/front.php";
    }

    /**
     * fonction permettant de prendre les 100 premiers caractères d'une string
     */
    static function more(string $contenu){
        return self::esc(substr($contenu , 0 , 100));
    }
    
    /**
     * fonction d'échappement pour éviter les injections XSS
     */
    static function esc(string $texte){ // échapper des caractères 
        return htmlspecialchars($texte);
    }

}