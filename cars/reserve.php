<?php

    include_once "../connection.php";
    session_start();

    
    $user = $_SESSION["user"];

    $totalPrice = $_GET["totalPrice"];
    $rentalOfficeLocation = $_GET["office_loc"];
    $pickupDate = $_GET["pdate"];
    $returnDate = $_GET["rdate"];
    $carID = $_GET["carID"];
    $userID = $user["customer_id"];

    $query = "SELECT rental_office_id FROM rental_office_location WHERE street_address = '$rentalOfficeLocation';";

    $result = mysqli_query($connection, $query);

    $data = $result->fetch_assoc();

    $officeID =  $data["rental_office_id"];

    $reserveQuery = "INSERT INTO reservation(Pickup_date, Return_date, customer_id, rental_office_id, total_payment, vin) VALUES('$pickupDate', '$returnDate', '$userID', '$officeID', '$totalPrice', '$carID');";

    mysqli_query($connection, $reserveQuery);
    
    // echo"<script>
    //     window.location.href='../welcome.php'
    // </script>"

?>