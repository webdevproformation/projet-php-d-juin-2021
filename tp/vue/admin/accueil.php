<div class="row">
    <div class="col">
        <h1><?= $titre ?></h1>
    </div>
</div>
<div class="row my-3">
    <div class="col">
        <a href="<?= WWW ?>admin/ajouter" class="btn btn-success">créer un nouvel article</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-striped"> <!-- table => toute la largeur  table-striped tableau rayé -->
            <tr><!--  table row => ligne de tableau -->
                <th>id</th> <!-- table  heading  cellule de tableau qui va contenir le titre d'une colonne --> 
                <th>nom article</th>
                <th>actions</th>
            </tr>
            <?php foreach ($articles as $article ) : ?>
    <tr>
        <td><?= $article->id ?></td>
        <td><?= $article->titre ?></td>
        <td>
            <a href="<?= WWW ?>article/view/<?= $article->id ?>" class="btn btn-primary">voir</a>
            <a href="<?= WWW ?>admin/modif/<?= $article->id ?>" class="btn btn-warning mx-2">modifier</a>
            <a href="<?= WWW ?>admin/suppr/<?= $article->id ?>" class="btn btn-danger" onclick="return confirm('confirmer la suppression de l\'article <?= $article->id ?>')">supprimer</a>
        </td>
    </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
