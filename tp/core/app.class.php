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

}