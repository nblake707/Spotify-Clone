<?php
// needed to import the code located in register-handler.php 
include("includes/classes/Account.php");

//creating an instance of account so that I have access to all methods stored in the class
$account = new Account();
$account->register();

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");
?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Spotify!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>

    <div id="inputContainer">

        <!-- action portion determines page where data will be sent -->
        <form id="loginForm" action="register.php" method="post">
            <h2>Login to your account </h2>
            <p>
                <label for="loginuserName">Username</label>
                <input id="loginUsername" name="loginUserName" type="text" placeholder="e.g. dDraper" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="e.g. dDraper" required>
            </p>

            <button type="submit" name="loginButton">LOG IN</button>

        </form>

        <form id="registerForm" action="register.php" method="post">

            <h2>Register for a free account</h2>
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. pOlsen" required>
            </p>

            <p>
                <label for="firstName">First Name</label>
                <input id="firstName" name="firstName" type="text" placeholder="e.g. Peggy" required>
            </p>
            <p>
                <label for="lastName">Last Name</label>
                <input id="lastName" name="lastName" type="text" placeholder="e.g. Olsen" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="" required>
            </p>
            <p>
                <label for="confirmEmail">Confirm Email</label>
                <input id="confirmEmail" name="confirmEmail" type="email" placeholder="" required>
            </p>


            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Your Password" required>
            </p>
            <p>
                <label for="password2">Confirm Password</label>
                <input id="password2" name="password2" type="password" placeholder="Conform Your Password" required>
            </p>

            <button type="submit" name="registerButton">Sign Up</button>
        </form>


    </div>



    <script src="" async defer></script>
</body>

</html>