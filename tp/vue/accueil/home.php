<div class="col">
    <h1><?= $titre ?></h1>
</div>
<div class="row">
    <?php foreach ($articles as $article) : ?>
        <article class="col-4 mb-3">
            <div class="card">
                <header class="card-header">
                    <h2><?= $article["titre"] ?></h2>
                </header>
                <img src="http://via.placeholder.com/300x200" alt="">
                <p class="card-body">
                    <?= $article["contenu"] ?>
                </p>
            </div>
        </article>
    <?php endforeach ?>
</div>