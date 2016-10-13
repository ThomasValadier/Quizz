<?php

require_once '../models/users.php';
$password = htmlspecialchars(trim($_REQUEST['password']));
$login = htmlspecialchars(trim($_REQUEST['login']));
$user = new users ($login, $password);
if ($user->verifuser() === true) {
    if ($user->connexion() === false) {
        echo 'noValidate';
    } else
        echo "validate";
} else {
    echo "comptinex";
}
//echo "toto";
//echo $login . $password . $user->getLogin();