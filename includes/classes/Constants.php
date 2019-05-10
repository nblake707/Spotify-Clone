<?php
class Constants {

    // we dont have to create instances of the class for access to static functions
    public static $passwrdsDoNotMatch = "Your passwords don't match";
    public static $passwrdsNotAlphaNumeric = "Your password can only contain numbers and letters";
    public static $passwordCharacters = "Your password must be between 8 and 30 characters";
    public static $emailInvalid = "Email is invalid!";
    public static $emailsDoNotMatch = "These emails don't match!";
    public static $lastNameCharacters = "Your last name must be between 2 and 25 characters";
    public static $firstNameCharacters =  "Your first name must be between 2 and 25 characters";
    public static $usernameCharacters = "Your username must be between 5 and 25 characters";
    public static $usernameTaken = "This username already exists";
    public static $emailTaken = "This email already exists";

}
?>