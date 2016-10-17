<?php
require '../views/includes/headerV.php';
require "../views/includes/modal.php";
require '../views/includes/footer.php';
require "../models/quizz.class.php";
//require '../models/questions.php';


$quizz = new quizz();
$result = $quizz->seeQuizz();
require "../views/affQuizz.php";

