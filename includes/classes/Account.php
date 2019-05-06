<?php
class Account
{
    private $errorArray;

    //This is a constructor 
    public function __construct()
    {
        $this->errorArray = array();
    }

    //needed to validate incoming data ex: username length

    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2)
    {
        $this->validateUsername($un);
        $this->validateFirstName($fn);
        $this->validateLastName($ln);
        $this->validateEmails($em, $em2);
        $this->validatePasswords($pw, $pw2);

        // checking to see if there are errors within the error array
        if(empty($this->errorArray)) {
            //Insert into db
            return true;
        }
        else {
            return false;
        }
    }

    //checks error array to see if the $error messaged passed in exists
    public function getError($error){
        if(!in_array($error, $this->errorArray)){
            $error = "";
        }
        return "<span class ='errorMessage'>$error</span>";
    }

    /* Validation Functions */

    private function validateUsername($un)
    {
        //check the length of a username
        if (strlen($un) > 25 || strlen($un) < 5) {
            //if the username is unsuitable we will add a message to the message array
            array_push($this->errorArray, Constants::$usernameCharacters);
            return;
        }

        //must also check if the username already exists
    }

    private function validateFirstName($fn)
    {
        if (strlen($fn) > 25 || strlen($fn) < 2) {
            //if the username is unsuitable we will add a message to the message array
            array_push($this->errorArray, Constants::$firstNameCharacters);
            return;
        }
    }

    private function validateLastName($ln)
    {
        if (strlen($ln) > 25 || strlen($ln) < 2) {
            //if the username is unsuitable we will add a message to the message array
            array_push($this->errorArray, Constants::$lastNameCharacters);
            return;
        }
    }

    private function validateEmails($em, $em2)
    {
        if ($em != $em2) {
            array_push($this->errorArray, Constants::$emailsDoNotMatch);
            return;
        }

        /*  checks that input is in correct email format!
        why is this needed? The form has its own form of validation (checking that an @ symbol has been included) 
        but users could type complete giberish with an @ and still submit data. */

        if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errorArray, Constants::$emailInvalid);
            return;
        }
    }

    private function validatePasswords($pw, $pw2){ 
        
        if ($pw != $pw2){
            array_push($this->errorArray, Constants::$passwrdsDoNotMatch);
            return; 
        }
        //if password does not match this pattern (not A-Z a-z or 0-9) then 
        if(preg_match('/[^A-Za-z0-9]/', $pw)){
            array_push($this->errorArray, Constants::$passwrdsNotAlphaNumeric);
            return; 
        }
            //checking password length
        if (strlen($pw) > 30 || strlen($pw) < 8) {
            //if the username is unsuitable we will add a message to the message array
            array_push($this->errorArray, Constants::$passwordCharacters);
            return;
    }
}
}

?>
