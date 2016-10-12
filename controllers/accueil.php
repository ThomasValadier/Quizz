<?php

require '../views/includes/headerV.php';
//require "../views/includes/modal.php";
require '../views/includes/footer.php';
require '../models/questions.php';


if (!empty($_GET['quizz'])) {
    require '../views/accueil.php';
    if (!empty ($_REQUEST['question'])) {

        if (!empty ($_REQUEST['reponse'])) {

            $response = htmlspecialchars(addslashes($_REQUEST['reponse']));
            $question = htmlspecialchars(addslashes($_REQUEST['question']));
            $option1 = htmlspecialchars(addslashes($_REQUEST['option1']));
            $option2 = htmlspecialchars(addslashes($_REQUEST['option2']));
            $option3 = htmlspecialchars(addslashes($_REQUEST['option3']));
            $option4 = htmlspecialchars(addslashes($_REQUEST['option4']));
            $option5 = htmlspecialchars(addslashes($_REQUEST['option5']));
            $quizz = htmlspecialchars(addslashes($_REQUEST['quizz']));
            $quest = new questions($question, $option1, $option2, $option3, $option4, $option5);
            $quest->setCorrect($response);
            $quest->setQuizz($quizz);
            $quest->addQuestion();


        }
    }
} else {
    header("location: ajoutquizz_controller.php");
}