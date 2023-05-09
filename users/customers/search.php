<?php

    include_once "../../connection.php";

    $property = $_POST["property"];
    $value = $_POST["value"];

    $query = "SELECT * FROM customer WHERE $property LIKE '%$value%';";

    $query = "SELECT * FROM (customer  join reservation on customer.customer_id= reservation.customer_id) join car on reservation.vin=car.vin WHERE customer.$property LIKE '%$value%'  group by customer.customer_id,customer.$property ;";
                                        
    $query_run = mysqli_query($connection, $query);

    $customers = array();

    while($customer = $query_run->fetch_assoc()) {
        array_push($customers, $customer);
    }

    echo json_encode($customers);

?>