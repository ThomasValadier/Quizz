<h2>Ajouter un quizz</h2>

<form action="" method="post">
    <input type="text" name="titre" id="titre" placeholder="Titre"><br>

    <select name="categorie" id="">
        <option value="" disabled selected>Choix catégorie</option>
        <?php
        foreach ($result as $data): ?>
            <option value="<?= $data->categorie ?>"><?= $data->categorie ?></option>
        <?php endforeach; ?>
    </select><br>
    <br>
    <button name="send" class="btn btn-default" type="submit">Commencer</button>
</form>