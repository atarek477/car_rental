<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/navbarStyle.css">
    <title>We are creative</title>
</head>
<body>
        <?php
            include_once "../../header.php";
        ?>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>title </th>
                                    <th>ssn</th>
                                    <th>sex</th>          
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","car_rental_system");

                                    
                                    
                                        
                                        $query = "SELECT * FROM employee limit 20 ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['employee_id']; ?></td>
                                                    <td><?= $items['employee_fname']; ?></td>
                                                    <td><?= $items['employee_lname']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td><?= $items['password']; ?></td>
                                                    <td><?= $items['title']; ?></td>
                                                    <td><?= $items['ssn']; ?></td>
                                                    <td><?= strcasecmp($items['sex'], "m") == 0? "Male":"Female"; ?></td>
                                                   
                                                    
                                                    
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