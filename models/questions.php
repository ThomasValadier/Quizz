<?php

class questions
{
    private $correct;
    private $question;
    private $option1;
    private $option2;
    private $option3;
    private $option4;
    private $option5;

    public function __construct($question = null, $option1 = null, $option2 = null, $option3 = null, $option4 = null, $option5 = null,
                                $correct = null)
    {
        $this->question = $question;
        $this->option1 = $option1;
        $this->option2 = $option2;
        $this->option3 = $option3;
        $this->option4 = $option4;
        $this->option5 = $option5;
        $this->correcte = $correct;
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function setQuestion($question)
    {
        $this->question = $question;
    }

    public function getOption1()
    {
        return $this->option1;
    }

    public function setOption1($option1)
    {
        $this->option1 = $option1;
    }

    public function getOption2()
    {
        return $this->option2;
    }

    public function setOption2($option2)
    {
        $this->option2 = $option2;
    }

    public function getOption3()
    {
        return $this->option3;
    }

    public function setOption3($option3)
    {
        $this->option3 = $option3;
    }

    public function getOption4()
    {
        return $this->option4;
    }

    public function setOption4($option4)
    {
        $this->option4 = $option4;
    }

    public function getOption5()
    {
        return $this->option5;
    }

    public function getCorrect()
    {
        return $this->correct;
    }

    public function setCorrect($correct)
    {
        $this->correct = $correct;
    }

    public function setOption5($option5)
    {
        $this->option5 = $option5;
    }

    public function addQuestion()
    {
        require_once 'dbConnect.php';
        $pdo = new DB();
        $question = $this->getQuestion();
        $option1 = $this->getOption1();
        $option2 = $this->getOption2();
        $option3 = $this->getOption3();
        $option4 = $this->getOption4();
        $option5 = $this->getOption5();
        $correct = $this->getCorrect();
        $sql = 'INSERT INTO question (question, option1, option2, option3, option4, option5, correct) VALUES (?, ?, ?, ?, ? ,? ,?)';
        $stmt = $pdo->getBDD()->prepare($sql);
        $stmt->execute([$question, $option1, $option2, $option3, $option4, $option5, $correct]);
    }

}