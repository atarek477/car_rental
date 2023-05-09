<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Funda Of Web IT</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>How to make Search box & filter data in HTML Table from Database in PHP MySQL </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>model</th>
                                    <th>year</th>
                                    <th>plate_id</th>
                                    <th>vin</th>
                                    <th>color </th>
                                    <th>mileage</th>
                                    <th>city</th>          //we can hide city and country if we already filtered
                                    <th>country</th>
                                    <th>price</th>  // not include in ddl but i think it imp to add it we customer search for car 
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","car_rental_system");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM car WHERE CONCAT(name,model,year,color,city,country) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['model']; ?></td>
                                                    <td><?= $items['year']; ?></td>
                                                    <td><?= $items['plate_id']; ?></td>
                                                    <td><?= $items['vin']; ?></td>
                                                    <td><?= $items['color']; ?></td>
                                                    <td><?= $items['mileage']; ?></td>
                                                    <td><?= $items['city']; ?></td>
                                                    <td><?= $items['country']; ?></td>
                                                    <td><?= $items['price']; ?></td>
                                                    
                                                    
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="10">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
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