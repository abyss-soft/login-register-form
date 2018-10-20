<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="Alexander Panov"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="description" content="New registration form"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>
<div class="container">

    <div class="row">
        <div class="form-wrapper">
            <h4 class="underline text-center">Registration</h4>
            <form id="register" name="register" action="#" method="post">
                <div class="row">

                    <label for="firstname" class="text-name-setting">Your first name</label>
                    <input type="text" id="firstname" name="firstname" class="form-control form-group col-12"
                           placeholder="Please enter your first name" required>

                    <label for="lastname" class="text-name-setting">Your last name</label>
                    <input type="text" id="lastname" name="lastname" class="form-control form-group col-12"
                           placeholder="Please enter your last name" required>

                    <label for="email" class="text-name-setting">Your email</label>
                    <input type="email" id="email" name="email" class="form-control form-group col-12"
                           placeholder="Please enter email" required>

                    <label for="password" class="text-name-setting">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-group col-12"
                           placeholder="Please enter password" required>

                    <label for="confirmpassword" class="text-name-setting">Please confirm your password </label>
                    <input type="password" id="confirmpassword" name="confirmpassword" class="form-control form-group col-12"
                           placeholder="Please confirm your password" required>

                    <label for="inputgender">Gender</label>
                    <select id="inputgender" name="inputgender" class="form-control">
                        <option>Male</option>
                        <option>Female</option>
                        <option selected>Other</option>
                    </select>

                    <p class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4">
                        <input name="acceptrules" id="acceptrules" value="acceptrules" type="checkbox">
                        <label for="acceptrules">Accept rules and conditions </label>
                    </p>

                    <button id="send" class="send btn btn-success btn-lg pull-right button-setting col-12 mt-4">Register
                    </button>
                    <p class="col-12 mt-3 register-setting text-center "><a href="index.php">Already have an account?</a></p>

                </div>
            </form>
        </div>
    </div>


</div>


<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/script-register.js"></script>
</body>
</html>