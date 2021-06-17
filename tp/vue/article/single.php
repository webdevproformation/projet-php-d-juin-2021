<!-- vue/article/single.php -->
<article class="row">
    <div class="col-12">
        <h1 class="text-warning border-bottom border-3 border-danger mb-3 pb-3"><?= $article->titre ?></h1>
    </div>
    <div class="col-12">
        <img src="http://via.placeholder.com/1200x200?text=<?= $article->id ?>" alt="" class="img-fluid">
    </div>
    <div class="col-12">
        <p><?= $article->contenu ?></p>
    </div>
    <div class="col-12 d-flex justify-content-end">
        <a href="<?= WWW?>accueil/index" class="btn btn-sm btn-outline-danger">Retour à l'accueil</a>
    </div>
</article>

<!--
    &lt;?php echo $variable ?> 
    &lt;?= $variable ?> 
-->