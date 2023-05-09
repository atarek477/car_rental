<?php

    include_once "../../connection.php";

    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $license = $_POST["license"];
    $sex = $_POST["sex"];
    $phone_number = $_POST["phone_number"];

    $query = "INSERT INTO `customer` (fname, lname, email, `password`, city, country, driver_license, sex, phonenumber) VALUES ('$fname' ,'$lname', '$email', '$pass', '$city', '$country', '$license', '$sex', '$phone_number');";

    mysqli_query($connection, $query);
?>