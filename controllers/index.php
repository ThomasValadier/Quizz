<?php
require "../views/includes/headerV.php";
require "../views/includes/modal.php";
require '../models/users.class.php';
require '../views/includes/footer.php';
require '../views/index.php';

if (!empty($_REQUEST['login'])) {
    $login = htmlspecialchars(trim($_REQUEST['login']));
    $password = htmlspecialchars(trim($_REQUEST['password']));
    $email = htmlspecialchars(trim($_REQUEST['email']));
    $user = new users($login, $password, $email);
    $cle = md5(microtime(TRUE) * 3);
    $user->insertUser($cle);

}