<?php

    include_once "../../connection.php";

    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $city = $_POST["title"];
    $license = $_POST["ssn"];
    $sex = $_POST["sex"];
    $query = "INSERT INTO `employee` (fname, lname, email, `password`, title, ssn, sex) VALUES ('$fname','$lname','$email','$pass','$title','$ssn','$sex';";

    mysqli_query($connection, $query);
?>