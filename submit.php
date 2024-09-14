<?php
    //assign to variable
    $first_name = $_POST["fullname"];
    $last_name = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $date = $_POST["date"];
    $yrLvl = $_POST["year-level"];

    //echo "checkbox". json_encode($_POST["checkbox"]);
    //echo to browser
    echo "first name: " .$first_name ."<br>";
    echo "last name: " .$last_name ."<br>";
    echo "email: "  .$email ."<br>";
    echo "password: " .$password ."<br>";
    echo "date: " .$date ."<br>";
    echo "year-level: " .$yrLvl ."<br>";

    
?>