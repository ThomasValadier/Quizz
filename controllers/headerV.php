<?php
require '../models/users.php';
require '../models/mail.php';

if (isset($_REQUEST['email'])) {
    $login = htmlspecialchars(trim($_REQUEST['login']));
    $password = htmlspecialchars(trim($_REQUEST['password']));
    $email = htmlspecialchars(trim($_REQUEST['email']));
    $user = new users($login, $password, $email);
    $cle = md5(microtime(TRUE) * 3);
    $user->insertUser($cle);
    $mail = new mail($email);
    $id = $user->seeId();
    $mail->mailIns($cle, $id);

} else {
    $password = htmlspecialchars(trim($_REQUEST['password']));
    $login = htmlspecialchars(trim($_REQUEST['login']));
    $user = new users ($login, $password);
    if ($user->verifuser() == true) {
        if ($user->connexion() != false) {
            echo 'true';
        } else
            echo 'false';
    } else
        echo 'false';

}