<?php

class quizz
{

    private $title;
    private $categorie;

    public function __construct($title = null, $categorie = null)
    {
        $this->title = $title;
        $this->categorie = $categorie;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    public function addQuizz()
    {
        require_once 'dbConnect.php';
        $pdo = new DB();
        $title = $this->getTitle();
        $cat = $this->getCategorie();
        $sql = 'INSERT INTO categories (titre, categorie) VALUES (?, ?)';
        $stmt = $pdo->getBDD()->prepare($sql);
        $stmt->execute([$title, $cat]);
    }

    public function seeID()
    {
        require_once 'dbConnect.php';
        $pdo = new DB();
        $title = $this->getTitle();
        $cat = $this->getCategorie();
        $sql = 'SELECT id_quizz FROM categories WHERE titre LIKE ? AND categorie LIKE ?';
        $stmt = $pdo->getBDD()->prepare($sql);
        $stmt->execute([$title, $cat]);
        $res = $stmt->fetch(PDO::FETCH_OBJ);
        return $res;
    }
}