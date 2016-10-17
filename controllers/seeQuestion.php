<?php
require '../views/includes/headerV.php';
require "../views/includes/modal.php";
require '../views/includes/footer.php';
require "../models/questions.php";
require '../models/quizz.class.php';
$ques = new questions();
if (!empty ($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $result = $ques->seeQuestion($id);
}
if (!empty($_REQUEST['id_quest'])) {
    $result = $_REQUEST['id_quest'];
}


$quizz = new quizz();
$quizz->setIdQuizz($id);
$id_qui = $quizz->getIdQuizz();

$res = $ques->seeOneQuestion($result, $id_qui);
$compt = 0;
while ($res == false && $compt <= 20) {   //permet de ne pas charger une page si l'id passé en parramaitre de permet pas de charger un res
    $compt++; //compte à revoir
    $result++;
    $res = $ques->seeOneQuestion($result, $id_qui);
}


//$ques->seeReponse($id_quest);
//$ques->seeReponse($id_quest);
require '../views/seeQuestion.php';

