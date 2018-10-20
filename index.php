<?php
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
    <title>Log in</title>
</head>
<body>
<div class="container">

    <div class="row">
        <div class="form-wrapper">
            <h4 class="underline text-center">Welcome Back!</h4>
            <form id="login" name="login" action="#" method="post">
                <div class="row">

                    <label for="email" class="text-name-setting">Your email</label>
                    <input type="email" id="email" name="email" class="form-control form-group col-12"
                           placeholder="Please enter email" required>

                    <label for="password" class="text-name-setting">Your password</label>
                    <input type="password" id="password" name="password" class="form-control form-group col-12"
                           placeholder="Please enter password" required>

                    <p class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <input name="loginkeeping" id="loginkeeping" value="loginkeeping" type="checkbox">
                        <label for="loginkeeping">Keep me logged in</label>
                    </p>
                    <p class="col-sm-6 col-md-6 col-lg-6 col-xl-6 forgot "><a href="#">Forgot Password?</a></p>

                    <button id="send" class="send btn btn-success btn-lg pull-right button-setting col-12 mt-4">Log In
                    </button>
                    <p class="col-12 mt-3 register-setting text-center "><a href="register.php">Register</a></p>

                </div>
            </form>
        </div>
    </div>


</div>

<!--Connect jquery script-->
<script src="js/jquery-1.7.1.min.js"></script>

<!--We connect the script to verify the form data and verify the correctness of the user's existence.-->
<script src="js/script-login.js"></script>
</body>
</html>