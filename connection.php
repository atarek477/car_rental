<?php
    $dbServerName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "car_rental_system";

    $connection = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

    if (mysqli_connect_errno()) {
        $error = mysqli_connect_error();
        echo "<script>
        alert($error);
        </script>";
        exit();
      }
?>