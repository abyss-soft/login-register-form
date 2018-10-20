<?php
session_start();


$first_name = $_SESSION['login_first_name']; // Load the variable to the session
$last_name = $_SESSION['login_last_name'];
$email = $_SESSION['login_email'];
$gender = $_SESSION['login_gender'];

//If there is no data in the session, then redirect to the login form.
if ((
        (isset($first_name) && !empty($first_name))
        && (isset($last_name) && !empty($last_name))
        && (isset($email) && !empty($email))
        && (isset($gender) && !empty($gender))
    ) == false
) {
    header('Location: index.php ');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="Alexander Panov"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="description" content="User login"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Registered User Details</title>
</head>
<body>
<div class="container">

    <div class="row">
        <div class="form-wrapper">

            <h4 class="underline text-center">Welcome <?php echo $first_name . "&nbsp;" . $last_name; ?></h4>

            <div class="page-header">
                <h5>Your first_name:
                    <small><?php echo $first_name; ?></small>
                </h5>
            </div>
            <div class="page-header">
                <h5>Your last name:
                    <small><?php echo $last_name; ?></small>
                </h5>
            </div>
            <div class="page-header">
                <h5>Your email:
                    <small><?php echo $email; ?></small>
                </h5>
            </div>
            <div class="page-header">
                <h5>Your gender:
                    <small><?php echo $gender; ?></small>
                </h5>
            </div>

            <div class="wrapper-destroy-buttom">
                <a class="color-link-destroy-session" href="logout.php">
                    <p class="col-12 mt-3 destroy-session text-center ">Log out</p>
                </a>
            </div>
        </div>
    </div>


</div>


</body>
</html>