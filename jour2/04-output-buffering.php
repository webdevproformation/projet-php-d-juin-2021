<?php 
// 04-output-buffering.php // écrivez dans un fichier .php 
// vous pouvez aussi écrire du html, des balises html 
// dès que php trouve des balises html dans son code => afficher à l'écran 
 // http://localhost/projet-php/jour2/04-output-buffering.php
 //au lieu de ce html soit affiché à l'écran stocké dans dans la RAM du serveur et que je puisse
 ob_start(); // ouvrir la RAM du server et PHP doit stocker dedans tout le html au lieu de l'afficher à 
 //l'écran // output-buffering = affichage stocker dans un mémoire tampon 
 echo "<br>"; 
?>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quos fuga ducimus eius, qui aspernatur in esse, nemo minima enim adipisci eos, voluptates perspiciatis praesentium veniam ad nulla temporibus laudantium.</p>
<?php echo "coucou" ?>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quos fuga ducimus eius, qui aspernatur in esse, nemo minima enim adipisci eos, voluptates perspiciatis praesentium veniam ad nulla temporibus laudantium.</p>
<?php $text_dans_ram = ob_get_clean();  // vider le cache et possibilité de stocker le contenu du cache dans une variable ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bonjour voici mon super site </h1>
    <?=  $text_dans_ram ?><!--  alias ou raccourcis bien, pas d'espace entre < le ? et = -->
    <?php echo $text_dans_ram ?><!-- https://www.php.net/manual/fr/function.echo.php -->
</body>
</html>

<!-- 
    05-class-classique.php
--> 