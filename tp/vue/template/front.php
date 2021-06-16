<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--  google  > bootstrap > https://getbootstrap.com/ > get started -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid bg-primary">
        <header class="container">
            <nav class="col navbar navbar-expand navbar-dark">
                <a href="#" class="navbar-brand">TP PHP</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Accueil</a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <main class="container">
        <section class="row">
            <div class="col">
                <?=  $content_for_template ?>
            </div>
        </section>
    </main>
</body>
</html>