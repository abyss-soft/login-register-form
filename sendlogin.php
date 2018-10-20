<?php
$usermail = $_POST['email'];
$passworduser = $_POST['password'];
$loginkeeping = $_POST['loginkeeping'];


$usermail = trim(strip_tags($usermail)); // The name of the user, where spaces are removed at the beginning and at the end of the line, as well as remove HTML and PHP tags
$passworduser = trim(strip_tags($passworduser));
$loginkeeping = trim(strip_tags($loginkeeping));

//Start session
session_start();

//check if the user wanted to stay in the system when he chose "Keep me logged in" on the form
if (strcmp($loginkeeping, "loginkeeping") == 0) {
    $_SESSION['loginkeepok'] = $loginkeeping; // Save the variable to the session
}

//Check that variables exist and are not empty
if (
    (isset($usermail) && !empty($usermail))
    && (isset($passworduser) && !empty($passworduser))
) {

    //If the variables exist and are not empty, then connect to the database and check if such a user exists.
    include "connect.php";   //We connect connection with base

    //create a prepared statement
    $query = "SELECT first_name, last_name, email, password, gender  FROM users WHERE email=?";
    $statement = $mysqli->prepare($query);

    //bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
    $statement->bind_param('s', $usermail);

    //execute query
    $statement->execute();

    //bind result variables
    $statement->bind_result($first_name, $last_name, $email, $passwordbase, $gender);
    $statement->fetch();

    //Compare the user password entered and specified during registration.
    if (password_verify($passworduser, $passwordbase)) {
        // Success!
        $_SESSION['login_first_name'] = $first_name; // Save the variable to the session
        $_SESSION['login_last_name'] = $last_name; // Save the variable to the session
        $_SESSION['login_email'] = $email; // Save the variable to the session
        $_SESSION['login_gender'] = $gender; // Save the variable to the session

        echo "true";

    } else {
        // Invalid
        echo "false";
    }

    //close connection
    $statement->close();
}
?>