<?php
                             /* Sanitization Functions */

/* At this point I could just repeat this code for all other fields but this would be redundant. Instead I will write a function that 
   will do the work for me. See below: sanitizeFormUsername & sanitizeFormString */

function sanitizeFormUsername($inputText)
{

    //The strip_tags() function strips a string from HTML, XML, and PHP tags. Strips all html elements that may be on a string 
    //this is a security measure. Users can alter the site if they can submit html elements in a form. 
    $inputText = strip_tags($inputText);

    //finding every single space in the string and replacing it with no space. Needed if a user enters a username with a space. 
    //takes eveything in the first parameter and replaces it with whatever is located in the second parameter
    $inputText = str_replace(" ", "", $inputText);

    return $inputText;
}

//Same as function above but includes an extra line that will make the first character uppercase
function sanitizeFormString($inputText)
{
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    //This will make the first character uppercase if a user negelects to do so
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

function sanitizeFormPassword($inputText)
{
    $inputText = strip_tags($inputText);
    return $inputText;
}

                        /* Validation Functions */

  function validateUsername($un){

  }      
  
  function validateFirstName($fn){
      
}  

function validateLastName($ln){
      
} 

function validateEmails($em, $em2){
      
}  

function validatePasswords($pw, $pw2){
      
}  


//register button was pressed
if (isset($_POST['registerButton'])) {

    /* Methods below are needed to prepare the data for persistance
                                These actions are repeated for all fields */

    // username 
    $username = sanitizeFormUsername($_POST['username']);

    // firstName
    $firstName = sanitizeFormString($_POST['firstName']);

    // lastName 
    $lastName = sanitizeFormString($_POST['lastName']);

    // email 
    $email = sanitizeFormString($_POST['email']);

    // confirmEmail
    $confirmEmail = sanitizeFormString($_POST['confirmEmail']);

    // password 
    $password = sanitizeFormPassword($_POST['password']);

    // password2 
    $password2 = sanitizeFormPassword($_POST['password2']);

    // Still need to validate incoming data ex: username length

     validateUsername($username); 
     validateFirstName($firstName); 
     validateLastName($lastName); 
     validateEmails($email, $confirmEmail); 
     validatePasswords($password, $password2); 
}
