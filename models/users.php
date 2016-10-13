<?php

class users
{
    private $login;
    private $password;
    private $role;
    private $email;
    private $actif;

    public function __construct($login = null, $password = null, $email = null, $role = "membre", $actif = false)
    {
        $this->login = $login;
        $this->password = $password;
        $this->role = $role;
        $this->email = $email;
        $this->actif = $actif;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return null
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param null $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return boolean
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * @param boolean $actif
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    }

    public function verifuser()
    {
        require_once 'dbConnect.php';
        $pdo = new DB();
        $sql = "SELECT id_user FROM users WHERE login = ? AND password = ?";
        $stmt = $pdo->getBDD()->prepare($sql);
        $stmt->execute([$this->getLogin(), $this->getPassword()]);
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        if (count($res) == 0) {
            return false;
        } else
            return true;
    }

    public function connexion()
    {
        require_once 'dbConnect.php';
        $pdo = new DB();
        $sql = "SELECT * FROM users WHERE login LIKE ? AND password LIKE ? AND actif LIKE ?";
        $stmt = $pdo->getBDD()->prepare($sql);
        $stmt->execute([$this->getLogin(), $this->getPassword(), true]);
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        if (count($res) == 1) {
            foreach ($res as $cle):
                $_SESSION['session'] = array(
                    'id' => $cle->id_user,
                    'login' => $cle->login,
                    'role' => $cle->role
                );
            endforeach;
            return true;
        } else
            return false;
    }

    public function deconnexion()
    {
        session_destroy();
    }

    public function seeId()
    {
        require_once 'dbConnect.php';
        $pdo = new DB();
        $email = $this->getEmail();
        $login = $this->getLogin();
        $sql = "SELECT id_user FROM users WHERE login LIKE ? AND email LIKE ? ";
        $stmt = $pdo->getBDD()->prepare($sql);
        $stmt->execute([$login, $email]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        $id = $result->id_user;
        return $id;
    }

    public function insertUser($cle)
    {
        require_once 'dbConnect.php';
        $pdo = new DB();
        $login = $this->getLogin();
        $psw = $this->getPassword();
        $email = $this->getEmail();
        $role = $this->getRole();
        $act = $this->getActif();
        // $mail = new mail;
        // $mail->mailIns($this->email, $cle, $this->login);
        $sql = 'INSERT INTO users (login, password, role, email, actif,cle) VALUES (?,?,?,?,?,?)';
        $stmt = $pdo->getBDD()->prepare($sql);
        $stmt->execute([$login, $psw, $role, $email, $act, $cle]);


    }


}