<h2 style="text-align: center">Ajouter un quizz</h2><br><br>

<form action="" method="post">
    <div class="form-group col-md-offset-3 col-md-6">
    <input class="form-control" type="text" name="titre" id="titre" placeholder="Titre">
    </div>
    <div class="form-group col-md-offset-3 col-md-6">
    <select class="form-control"  name="categorie" id="">
        <option class="form-control" value="" disabled selected>Choix catégorie</option>
        <?php
        foreach ($result as $data): ?>
            <option value="<?= $data->categorie ?>"><?= $data->categorie ?></option>
        <?php endforeach; ?>
    </select>
    </div><br>
    <br>
    <button name="send" class="btn btn-success col-md-4 col-md-offset-4" type="submit">Créer</button>
</form>