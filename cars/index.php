<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/navbarStyle.css" rel="stylesheet">
    <style>
        a {
            color: #fff;

        }
    </style>
    
    <title>Funda Of Web IT</title>
</head>
<body>

            <?php
                include_once "../header.php";
                session_start();
                $userType = $_SESSION["userType"];
                $cars = $_GET;
            ?>
            <div class="table col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr id="header">
                                    <th>name</th>
                                    <th>model</th>
                                    <th>year</th>
                                    <th>plate_id</th>
                                    <th>vin</th>
                                    <th>color </th>
                                    <th>mileage</th>
                                    <th>city</th>          
                                    <th>country</th>
                                    <th>costPerDay</th>  
                                    <th>image</th>  
                                    <th>Reserve</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","car_rental_system");

                                    
                                    
                                        
                                        $query = "SELECT * FROM car limit 10 ";
                                        $query_run = mysqli_query($con, $query);
                                        $row = 0;
                                        if($cars == null) {
                                            $cars = $query_run;
                                        }

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($cars as $car)
                                            {
                                                ?>
                                                <tr id = <?="row-".$row++?>>
                                                    <td><?= $car['name']; ?></td>
                                                    <td><?= $car['model']; ?></td>
                                                    <td><?= $car['year']; ?></td>
                                                    <td><?= $car['plate_id']; ?></td>
                                                    <td><?= $car['vin']; ?></td>
                                                    <td><?= $car['color']; ?></td>
                                                    <td><?= $car['mileage']; ?></td>
                                                    <td><?= $car['city']; ?></td>
                                                    <td><?= $car['country']; ?></td>
                                                    <td><?= $car['costPerDay']; ?></td>
                                                    <td><?= $car['img_url']; ?></td>
                                                    <td><button class="btn btn-success" style ="width:100%; height:100%;">Reserve</button></td>
                                                    
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
    <?php if(strcasecmp($userType, "employee") == 0) {?>
        <button id="addCar" class="ms-4 btn btn-danger">Add car</button>
     <?php }?>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        function objectToQueryString(obj) {
            var str = [];
            for (var p in obj)
                if (obj.hasOwnProperty(p)) {
                str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                }
            return str.join("&");
        }


        $("#addCar").click(e => {
            window.location.href = "add_car.php";
        })
        
        function handleClick(event) {
            let button = event.target;
            let header = document.getElementById("header");
            let header_data = header.childNodes;
            let row = button.parentNode.parentNode;

            
            data = row.childNodes;
            let car = {};
            for(let i = 0; i < data.length; i++) {
                let key = header_data[i].textContent;
                let value = data[i].textContent;

                if(data[i].nodeName == "TD") {
                    
                    car[key] = value;
                }
            }

            let carID = "carID=" + car["vin"];

            let cost = "costPerDay=" + car["costPerDay"]; 

            window.location.href=`reservation_form.php?${carID}&${cost}`
        }

        $(".table button").click(handleClick);
    </script>
</body>
</html>