<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$usermail = $_POST['email'];
$passworduser = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$inputgender = $_POST['inputgender'];
$acceptrules = $_POST['acceptrules'];


$firstname = trim(strip_tags($firstname)); // The name of the user, where spaces are removed at the beginning and at the end of the line, as well as remove HTML and PHP tags
$lastname = trim(strip_tags($lastname));
$usermail = trim(strip_tags($usermail));
$passworduser = trim(strip_tags($passworduser));
$confirmpassword = trim(strip_tags($confirmpassword));
$inputgender = trim(strip_tags($inputgender));
$acceptrules = trim(strip_tags($acceptrules));


//Check that variables exist and are not empty
if (
    (isset($firstname) && !empty($firstname))
    && (isset($lastname) && !empty($lastname))
    && (isset($usermail) && !empty($usermail))
    && (isset($passworduser) && !empty($passworduser))
    && (isset($confirmpassword) && !empty($confirmpassword))
    && (isset($inputgender) && !empty($inputgender)) && (isset($acceptrules) && !empty($acceptrules))
) {
    //If the variables exist and are not empty, then check whether the user accepted the rules
    if ($acceptrules == "acceptrules") {

        //Let us check that the password and the repeat password coincide, if they do not coincide, then we terminate the script.
        if (strcmp($passworduser, $confirmpassword) != 0) {
            echo "false";
            exit(1);
        }

        //Creates a password hash
        $passworduser = password_hash($passworduser, PASSWORD_DEFAULT);


        include "connect.php";   //We connect connection with base

        $firstname = '"' . $mysqli->real_escape_string($firstname) . '"';
        $lastname = '"' . $mysqli->real_escape_string($lastname) . '"';
        $usermail = '"' . $mysqli->real_escape_string($usermail) . '"';
        $passworduser = '"' . $mysqli->real_escape_string($passworduser) . '"';
        $inputgender = '"' . $mysqli->real_escape_string($inputgender) . '"';

        //Insert the data into the database
        $insert = $mysqli->query("INSERT INTO users (first_name, last_name, email, password, gender) VALUES
                  ($firstname, $lastname, $usermail, $passworduser, $inputgender)");

        if ($insert) {
            //If the data is successfully written
            echo "true";
        } else {
            die("false");
        }
    }

}
else echo "false";
?>