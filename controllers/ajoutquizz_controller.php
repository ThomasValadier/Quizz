<?php

require '../views/includes/headerV.php';
require "../views/includes/modal.php";
require '../views/includes/footer.php';
require '../models/questions.php';



$ques = new questions();
$result = $ques->viewCategorie();
require '../views/ajoutquizz.php';


if (isset($_POST['send'])) {
    if (!empty($_POST['categorie']) && !empty($_POST['titre'])) {
        require_once '../models/quizz.class.php';
        $categorie = htmlspecialchars(($_POST['categorie']));
        $title = htmlspecialchars(addslashes($_POST['titre']));
        $add = new quizz($title, $categorie);
        $add->addQuizz();
        $resu = $add->seeID();
        $data = $resu->id_quizz;
        ?>
        <script>document.location = 'accueil.php?quizz='+ <?php echo $data ?></script> <?php
    } else {
        ?>
        <script>alert("rempli tous les champs batard")</script><?php
    }
}

