<div class="row">
    <div class="col">
        <h1>Ajouter un nouvel article</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="<?= WWW ?>admin/ajouter">
            <div class="form-group">
                <label for="titre">titre</label>
                <input type="text" name="titre" id="titre" class="form-control">
            </div>
            <div class="form-group">
                <label for="titre">contenu</label>
                <textarea name="contenu" id="contenu" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group d-flex justify-content-end mt-3">
                <input type="submit" class="btn btn-dark">
            </div>
        </form>
    </div>
</div>