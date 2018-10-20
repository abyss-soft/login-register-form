<?php
//Data for connection to the base
$login= 'mysql';  //Login
$password = 'mysql'; //Password

$mysqli = new mysqli("localhost", $login, $password , "formtest");

//Connection check
if (mysqli_connect_errno()) {
    printf("Failed to connect: %s\n", mysqli_connect_error());
    exit();
}
?>