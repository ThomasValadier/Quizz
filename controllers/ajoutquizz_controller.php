<?php
require '../views/includes/headerV.php';
require '../views/includes/footer.php';
require '../models/questions.php';


$ques = new questions();
$result = $ques->viewCategorie();
require '../views/ajoutquizz.php';


if (isset($_GET['send'])) {
    header('location: accueil.php');
}

