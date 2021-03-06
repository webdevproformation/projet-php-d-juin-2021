<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--  google  > bootstrap > https://getbootstrap.com/ > get started -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="<?= WWW ?>public/style.css"  rel="stylesheet">
</head>

<body > <!--  -->
    <div class="container-fluid bg-warning">
        <header class="container">
            <nav class="col navbar navbar-expand navbar-light">
                <a href="<?= WWW ?>accueil/index" class="navbar-brand">TP PHP</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= WWW ?>accueil/index" class="nav-link">Accueil</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <?php if(!isset($_SESSION["auth"])) : ?>
                    <li class="nav-item">
                        <a href="<?= WWW ?>login" class="nav-link">Connexion</a>
                    </li>
                    <?php endif ?>
                    <?php if(isset($_SESSION["auth"])) : ?>
                    <li class="nav-item">
                        <a href="<?= WWW ?>admin/accueil" class="nav-link">Gestion du site</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= WWW ?>login/deconnexion" class="nav-link">Déconnexion</a>
                    </li>
                    <?php endif ?>
                </ul>
            </nav>
        </header>
    </div>
    <main class="container">
        <section class="row">
            <?= $content_for_template ?>
        </section>
    </main>
</body>

</html>
<!-- 13h50 bon appétit -->