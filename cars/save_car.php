<?php

    include_once "../connection.php";

    $name = $_GET["name"];
    $model = $_GET["model"];
    $year = $_GET["year"];
    $plate_id = $_GET["plate_id"];
    $vin = $_GET["vin"];
    $color = $_GET["color"];
    $mileage = $_GET["mileage"];
    $city = $_GET["city"];
    $country = $_GET["country"];
    $img_url = $_GET["img_url"];

    $authenticationQuery = "SELECT vin FROM `car` WHERE vin = '$vin'";
    $result = mysqli_query($connection, $authenticationQuery);

    if($result->num_rows != 0) {
        echo "<script>
            alert('Vin already exists');

        </script>";
    } else {
        $query = "INSERT INTO `car` (`name`, model, `year`, plate_id, vin, color, mileage,city , country,img_url)
        VALUES ('$name' ,'$model', '$year', '$plate_id','$vin' ,'$color','$mileage','$city', '$country', '$img_url');";
   
       mysqli_query($connection, $query);
    }
   
?>