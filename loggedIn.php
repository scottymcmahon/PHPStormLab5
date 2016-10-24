<?php
/**
 * Created by PhpStorm.
 * User: 1404436
 * Date: 24/10/2016
 * Time: 14:03
 */

session_start();
$accesslevel = $_COOKIE['access_level_cookie'];

displayAccessLevelInformation($accesslevel);

function displayAccessLevelInformation($accessLevel)
{
    if ($accessLevel == "standardUser")
    {
        echo "<p style = \"background-color: lightgreen\"> You are currently logged in as a standard user</p>";
    }
    elseif ($accessLevel == "root")
    {
        echo "<p<p style = \"background-color: red\"> You are currently logged in as a root user</p>";
        echo "<p<p style = \"background-color: red\"> You now have access to additional admin features</p>";
    }
}