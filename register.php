<?php
include("includes/config.php");
// needed to import the code located in register-handler.php 
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

//creating an instance of account so that I have access to all methods stored in the class
//passing in the con variable so that we can use the database
$account = new Account($con);


include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

/*this method is used within the value portion of the inputs below. It checks to see if a value has been set. If true then the 
value will be printed within the field */

function getInputValue($name){
    if(isset($_POST[$name])){
        echo $_POST[$name];
    }
}
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
                <?php echo $account->getError(Constants::$usernameCharacters); ?>
                <?php echo $account->getError(Constants::$usernameTaken); ?>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. pOlsen" value="<?php getInputValue('username') ?>" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                <label for="firstName">First Name</label>
                <input id="firstName" name="firstName" type="text" placeholder="e.g. Peggy" value="<?php getInputValue('firstName')?>" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                <label for="lastName">Last Name</label>
                <input id="lastName" name="lastName" type="text" placeholder="e.g. Olsen" value="<?php getInputValue('lastName')?>" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                <?php echo $account->getError(Constants::$emailInvalid); ?>
                <?php echo $account->getError(Constants::$emailTaken); ?>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="" value="<?php getInputValue('email')?>" required>
            </p>

            <p>
                <label for="confirmEmail">Confirm Email</label>
                <input id="confirmEmail" name="confirmEmail" type="email" placeholder="" value="<?php getInputValue('email2')?>" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$passwrdsDoNotMatch); ?>
                <?php echo $account->getError(Constants::$passwrdsNotAlphaNumeric); ?>
                <?php echo $account->getError(Constants::$passwordCharacters); ?>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Your Password" required>
            </p>

            <p>
                <?php echo $account->getError("Your username must be between 5 and 25 characters"); ?>
                <label for="password2">Confirm Password</label>
                <input id="password2" name="password2" type="password" placeholder="Conform Your Password" required>
            </p>

            <button type="submit" name="registerButton">Sign Up</button>
        </form>


    </div>



    <script src="" async defer></script>
</body>

</html>