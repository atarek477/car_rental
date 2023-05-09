<!doctype html>
<html lang="en">
<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>car rental</title>
</head>
<body>
<style>
      select {
        width: 140px;
        height: 35px;
        padding: 4px;
        border-radius: 4px;
        box-shadow: 2px 2px 8px #999;
        background: #eee;
        border: none;
        outline: none;
        display: inline-block;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        cursor: pointer;
      }
      label {
        position: relative;
      }
      label:after {
        content: '<>';
        font: 11px "Consolas", monospace;
        color: #666;
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        transform: rotate(90deg);
        right: 8px;
        top: 2px;
        padding: 0 0 2px;
        border-bottom: 1px solid #ddd;
        position: absolute;
        pointer-events: none;
      }
      label:before {
        content: '';
        right: 6px;
        top: 0px;
        width: 20px;
        height: 20px;
        background: #eee;
        position: absolute;
        pointer-events: none;
        display: block;
      }
    </style>
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search For any car</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        <select name= "attr" id = "attr" >
                                            <option value ="name" >Name</option>
                                            <option value ="model" >Model</option>
                                            <option value ="year" >Year</option>
                                            <option value ="color" >Color</option>
                                            <option value ="mileage" >Mileage</option>
                                            <option value ="city"  selected>City</option>
                                         </select>
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
                                    <th>city</th>          
                                    <th>country</th>
                                    <th>price</th>  
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","car_rental_system");
                                    $attr = $_POST["attr"];
                                
                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM car WHERE $attr LIKE '%$filtervalues%' ";
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