<?php
/**
 * Created by PhpStorm.
 * User: 1404436
 * Date: 24/10/2016
 * Time: 14:03
 */

$username = $_POST["Name"];
$password = $_POST["Password"];

if ($username =="username" && $password =="password")
{
    setcookie('access_level_cookie', 'standardUser');
}

header('Location: loggedIn.php');