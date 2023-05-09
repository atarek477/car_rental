<?php
    function getCondition($attrs) {

        $condition = "";
        $count = 1;

        foreach($attrs as $attr => $val) {
            if(!(strcasecmp($val, "") == 0)) {
                if($count == 1) {
                    $condition  = $condition . "$attr = '$val' ";
                    $count++;
                } else {
                    $condition  = $condition . "AND $attr = '$val' ";
                }
            }

        }

        return $condition;

    }

    include_once "../connection.php";

    echo var_dump($_POST);
    
    $name = $_POST["name"];
    $model = $_POST["model"];
    $year = $_POST["year"];
    $color = $_POST["color"];

    $string = getCondition("name", $name, 2);

    $keys = array_keys($_POST);

    foreach($keys as $key) {
        $attrs[$key] = $_POST[$key];
    }

    
    $query = "SELECT * FROM car WHERE " . getCondition($attrs) . ";";
    
    $result = mysqli_query($connection, $query);
    $cars = array();

    while($car = $result->fetch_assoc()) {

        array_push($cars, $car);
    }
    
    $queryString = http_build_query($cars);

    echo"<script>
            window.location.href='index.php?$queryString'
        </script>";

?>