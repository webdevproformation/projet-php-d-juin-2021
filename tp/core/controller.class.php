<?php 

class Controller{

    public $data = [] ;

    public function render($nom_template){
        ob_start();
        $controller_name = get_class($this); // "AccueilController"
        $controller_name = str_replace("Controller", "", $controller_name); // "Accueil"
        $controller_name = strtolower($controller_name); // "accueil"

        extract($this->data); // envoyer les données dans la vue 

        require "vue/$controller_name/$nom_template.php"; // "vue/accueil/home.php"
        
        $content_for_template = ob_get_clean();

        require "vue/template/front.php";
        // créer le dossier template dans le dossier vue
        // créer le fichier front.php dans le dossier template

    } 

    public function send($data){
        $this->data = $data;
    }

}