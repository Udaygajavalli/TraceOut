<?php 
include("inc/db_connect.php"); //connect the connection page

if(empty($_SESSION)) // if the session not yet started 
{
   session_start();
}

if(isset($_SESSION['username'])) { // if already login
    header("location: main.php"); // send to home page
    exit; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Login.css">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        .from-center {
            margin-top: 15%;
            margin-left: 30%;
            margin-right: 30%;
            padding: 2%;
        }

        @media screen and (max-width: 1000px) {
            .from-center {
                width: 90%;
                margin: 15% auto;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="login_process.php" onsubmit="return valid()" method="Post" class="shadow from-center">
            <a href="" class="text-center d-block">
                <img src="login-icon.png" class="img-fluid mx-auto w-25" alt="">
            </a>
            <h2 class="text-center mb-3">Login Page</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="username" id="email" placeholder="Email">
                <div id="email_error" class=" text-danger"></div>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" name="pass" id="password" placeholder="Password">
                <div id="password_error" class=" text-danger"></div>
            </div>
            <script>
                function valid(){
                    var Email = document.getElementById("email").value;
                    var Password = document.getElementById("password").value;
                    //EMAIL
                    if (Email == "") {
                        document.getElementById("email_error").innerHTML = "* Please Enter Email";
                        return false;
                    }
                    if (Email.indexOf('@') == 0) {
                        document.getElementById("email_error").innerHTML = "* Invalid Email";
                        return false;
                    }
                    if (Email.charAt(Email.length - 4) != '.') {
                        document.getElementById("email_error").innerHTML = "* Invalid Email";
                        return false;
                    }
                    else {
                        document.getElementById("email_error").innerHTML = "";
                        true;
                    }
                    //password
                    if (Password == "") {
                        document.getElementById("password_error").innerHTML = "* Please Enter Password";
                        return false;
                    }
                    if (Password.length < 8) {
                        document.getElementById("password_error").innerHTML = "* Password must be 8 characters";
                        return false;
                    }
                    else {
                        document.getElementById("password_error").innerHTML = "";
                        true;
                    }
                }
            </script>
            <button type="submit" name="submit" id="btn" class="btn btn-primary btn-block">Log In</button>
            <div class="text-center my-3">
                <span>Don't have an account?</span>
                <a href="register.html">Create One</a>
            </div>
        </form>
        <div class="text-center my-4">
            Copyright © 2018 — All Rights Reserved
        </div>
    </div>
</body>

</html>