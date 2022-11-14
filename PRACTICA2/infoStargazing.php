<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/png"
      href="iconos/constelacion_2.png"
      sizes="36x36"
    />
    <link rel="stylesheet" href="amazingStyle.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap"
      rel="stylesheet"
    />
    <title>Contact form</title>
  </head>

<?php

//if (isset($_POST['Send_data'])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $date = $_POST["bdate"];
    $city = $_POST["city"];
    $region = $_POST["region"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $hobbies = $_POST["hobbies"];
    $frecuence = $_POST["frecuence"];
    $budget_min = $_POST["budget_min"];
    $budget_max = $_POST["budget_max"];
    $message = $_POST["message"];



    echo "<h2>Thank you for register. This is your personal data:<br></h2>";

    echo "<p>".$first_name." ".$last_name."</p>";

    echo "<p>Birth date: ".$date."</p>";

    echo "<p>Region: ".$region." - Address: ".$address."</p>";
        
    echo "<p>Contact details - Phone number: ".$phone." - E-mail: ".$email."</p>";

    echo "<hr>";

    echo "<p>Interests and hobbies:</p>";

    if (!empty($_POST['hobbies'])) {
        // foreach ($_POST['hobbies'] as $selected) {
        //     echo $selected.", ";
        // }
        echo $_POST['hobbies']."<br>";
    }

    echo "<p>You desire to receive our newsletter ".$frecuence."</p>";
  
    echo "<p>Your estimated budget is between ".$budget_min." $ and ".$budget_max." $</p>";
  
    echo "<p>Additional information: ".$message;

    
//}



?>