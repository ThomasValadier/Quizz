<h2>Ajouter un quizz</h2>

<form action="">
    <input type="text" id="titre" placeholder="Titre"><br>

    <select name="" id="">
        <option value="" disabled selected>Choix catégorie</option>
        <?php
        foreach ($result as $data): ?>
            <option value="<?= $data->nom_categorie ?>"><?= $data->nom_categorie ?></option>
        <?php endforeach; ?>
    </select><br>
    <br>
    <button name="send" class="btn btn-default" type="submit">Commencer</button>
</form>