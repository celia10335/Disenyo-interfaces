<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./part2style.css" />
    <title>Form results</title>
  </head>


<?php

//if (isset($_POST['Send_data'])) {
    $title = $_POST["title"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $date = $_POST["bdate"];
    $city = $_POST["city"];
    $region = $_POST["region"];
    $postcode = $_POST["postcode"];
    $regionalcode = $_POST["regionalcode"];
    $susc_type = $_POST["susc-type"];
    $susc_code = $_POST["susc-code"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cardtype = $_POST["cardtype"];
    $cardnumber = $_POST["cardnumber"];
    $message = $_POST["message"];



    echo "<h2>Thank you for register. This is your personal data:<br></h2>";

    echo "<p>".$title." ".$first_name." ".$last_name."</p>";

    echo "<p>Birth date: ".$date."</p>";

    echo "<p>City: ".$city.", region: ".$region.", postcode: ".$postcode.", regional code: ".$regionalcode."</p>";
        
    echo "<hr>";

    echo "<p>Suscription details: ".$susc_type." code: ".$susc_code."</p>";

    echo "<p>Interests:</p>";

    if (!empty($_POST['interest'])) {
        // foreach ($_POST['interest'] as $selected) {
        //     echo $selected.", ";
        // }
        echo $_POST['interest']."<br>";
    }

    echo "<p>Login details - user name: ".$username." password: ".$password."</p>";
  
    echo "<p>Payment details - card type: ".$cardtype." card number: ".$cardnumber."</p>";
  
    echo "<p>Additional information: ".$message;

    
//}



?>