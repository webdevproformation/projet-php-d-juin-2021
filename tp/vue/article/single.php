<!-- vue/article/single.php -->
<article class="row">
    <div class="col-12">
        <h1><?= $article->titre ?></h1>
    </div>
    <div class="col-12">
        <img src="http://via.placeholder.com/1200x200?text=<?= $article->id ?>" alt="" class="img-fluid">
    </div>
    <div class="col-12">
        <p><?= $article->contenu ?></p>
    </div>
</article>

<!--
    &lt;?php echo $variable ?> 
    &lt;?= $variable ?> 
-->