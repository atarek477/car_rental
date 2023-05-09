<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/navbarStyle.css">
    <title>we are creative</title>
</head>
<body>

    <?php
        include_once "../../header.php";

        $customer_id = $_GET["customer_id"];
    ?>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table-striped table table-bordered">
                            <thead> 
                                <tr>
                                    <th>Vin</th>
                                    <th>pickup date</th>
                                    <th>Return date</th>
                                    <th>customer id</th>
                                    <th>Rental office id</th>
                                    <th>Total Payment</th>
                                    <th>First Name</th>
                                    <th>Last  Name</th>
                                    <th>Email</th>
                                    <th>Sex</th>
                                    <th>Driver License</th>
                                    <th>Phone Number</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Car name</th>
                                    <th>Car Model</th>
                                    <th>Car Year </th>
                                    <th>Car Plate Id </th>
                                    <th>Car Color </th>
                                    <th>Car Mileage</th>
                                    <th>Car Price Per Day</th>
                                    <th>Car Image</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $connection = mysqli_connect("localhost","root","","car_rental_system");

                                    $query = "SELECT * FROM (customer  join reservation on customer.customer_id= reservation.customer_id) join car on reservation.vin=car.vin WHERE customer.customer_id = '$customer_id'  group by customer.customer_id,customer.customer_id ;";

                                    $query_run = mysqli_query($connection, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['vin']; ?></td>
                                                    <td><?= $items['Pickup_date']; ?></td>
                                                    <td><?= $items['Return_date']; ?></td>
                                                    <td><?= $items['customer_id']; ?></td>
                                                    <td><?= $items['rental_office_id']; ?></td>
                                                    <td><?= $items['total_payment']; ?></td>
                                                    <td><?= $items['fname']; ?></td>
                                                    <td><?= $items['lname']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td><?= $items['sex']; ?></td>
                                                    <td><?= $items['driver_license']; ?></td>
                                                    <td><?= $items['phonenumber']; ?></td>
                                                    <td><?= $items['city']; ?></td>
                                                    <td><?= $items['country']; ?></td>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['model']; ?></td>
                                                    <td><?= $items['year']; ?></td>
                                                    <td><?= $items['plate_id']; ?></td>
                                                    <td><?= $items['color']; ?></td>
                                                    <td><?= $items['mileage']; ?></td>
                                                    <td><?= $items['pricePerDay']; ?></td>
                                                    <td><?= $items['img_url']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="23">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>