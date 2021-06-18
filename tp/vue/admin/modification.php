<div class="row">
    <div class="col">
        <h1>Modifier l'article numéro <?= App::esc($article->id) ?></h1>
    </div>
</div>
<section class="row">
    <div class="col">
        <form action="<?= WWW ?>admin/modif/<?= $article->id ?>" method="POST">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control" value="<?= App::esc($article->titre) ?>">
            </div>
            <div class="form-group">
                <label for="contenu">Contenu</label>
                <textarea name="contenu" id="contenu" class="form-control" rows="5"><?= App::esc($article->contenu) ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?= App::esc($article->id) ?>">
            <div class="form-group mt-3 d-flex justify-content-end">
                <a href="<?= WWW ?>admin/accueil" class="btn btn-outline-secondary me-3">retour à l'accueil</a>
                <input type="submit" class="btn btn-outline-success" value="Mettre à jour">
            </div>
        </form>
    </div>
</section>