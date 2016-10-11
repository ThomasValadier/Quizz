<?php
require '../views/includes/headerV.php';
require '../views/includes/footer.php';
require '../models/questions.php';
require '../views/accueil.php';


if (!empty ($_REQUEST['question'])) {
    if (!empty ($_REQUEST['reponse'])) {
        $reponse = htmlspecialchars(addslashes($_REQUEST['reponse']));
        $question = htmlspecialchars(addslashes($_REQUEST['question']));
        $option1 = htmlspecialchars(addslashes($_REQUEST['option1']));
        $option2 = htmlspecialchars(addslashes($_REQUEST['option2']));
        $option3 = htmlspecialchars(addslashes($_REQUEST['option3']));
        $option4 = htmlspecialchars(addslashes($_REQUEST['option4']));
        $option5 = htmlspecialchars(addslashes($_REQUEST['option5']));
        $quest = new questions($question, $option1, $option2, $option3, $option4, $option5);
        $quest->setCorrect($reponse);
        $quest->addQuestion();
    }
}

