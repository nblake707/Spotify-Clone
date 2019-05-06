<?php
//look this up
    ob_start();
    
    $timezone = date_default_timezone_set("America/New_York");

    //config variable
    // username password and name of database
    $con = mysqli_connect("localhost", "root", "", "Spotify");

    //error message if connection to database failed
    if(mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_errno();
    }






?>