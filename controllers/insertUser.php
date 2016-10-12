<?php

require '../models/users.php';

$login = htmlspecialchars(trim($_REQUEST['login']));
$password = htmlspecialchars(trim($_REQUEST['password']));
$email = htmlspecialchars(trim($_REQUEST['email']));
$user = new users($login, $password, $email);
$user->insertUser();


