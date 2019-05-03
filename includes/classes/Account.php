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
    }

    /* Validation Functions */

    private function validateUsername($un)
    {
        //check the length of a username
        if (strlen($un) > 25 || strlen($un) < 5) {
            //if the username is unsuitable we will add a message to the message array
            array_push($this->errorArray, "Your username must be between 5 and 25 characters");
            return;
        }

        //must also check if the username already exists
    }

    private function validateFirstName($fn)
    {
        if (strlen($fn) > 25 || strlen($fn) < 2) {
            //if the username is unsuitable we will add a message to the message array
            array_push($this->errorArray, "Your first name must be between 2 and 25 characters");
            return;
        }
    }

    private function validateLastName($ln)
    {
        if (strlen($ln) > 25 || strlen($ln) < 2) {
            //if the username is unsuitable we will add a message to the message array
            array_push($this->errorArray, "Your last name must be between 2 and 25 characters");
            return;
        }
    }

    private function validateEmails($em, $em2)
    {
        if ($em != $em2) {
            array_push($this->errorArray, "These emails don't match!");
            return;
        }

        /*  checks that input is in correct email format!
        why is this needed? The form has its own form of validation (checking that an @ symbol has been included) 
        but users could type complete giberish with an @ and still submit data. */

        if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errorArray, "Email is invalid!");
            return;
        }
    }

    private function validatePasswords($pw, $pw2)
    { }
}