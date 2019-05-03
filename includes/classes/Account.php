<?php
class Account
{

    //This is a constructor 
    public function __construct()
    { }

    //needed to validate incoming data ex: username length

    public function register() {
        $this->validateUsername($username);
        $this->validateFirstName($firstName);
        $this->validateLastName($lastName);
        $this->validateEmails($email, $confirmEmail);
        $this->validatePasswords($password, $password2);
    }

    /* Validation Functions */

    private function validateUsername($un){ 
        echo "username function called";
    }

    private function validateFirstName($fn)
    { }

    private function validateLastName($ln)
    { }

    private function validateEmails($em, $em2)
    { }

    private function validatePasswords($pw, $pw2)
    { }
}
