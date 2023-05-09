<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/navbarStyle.css">
    <title>WE ARE CREATIVE</title>

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
</head>
<body>

            <?php
                include_once "../../header.php";

                $items = null;

                if(isset($_GET["undefined"])) {
                    $items = $_GET["undefined"];
                }
            ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4>all info</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-7">

                                    <form onsubmit = "return handleSearch()" id = "searchForm" action="" method="GET">
                                        <div class="input-group mb-3">
                                            <input id="searchBar" type="text" name="value" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                            <select name= "property" id = "property" >
                                            <option value ="fname" >first Name</option>
                                            <option value ="lname" >last Name</option>
                                            <option value ="customer_id" >customer id</option>
                                            <option value ="email" >email</option>
                                            <option value ="password" >password</option>
                                            <option value ="sex"  >sex</option>
                                            <option value ="driver_license"  >driver license</option>
                                            <option value ="phonenumber" >phone number</option>
                                            <option value ="city" >City</option>
                                            <option value ="country"  selected>country</option>
                                         </select>
                                            <button id="searchBtn" type="submit" class="btn btn-primary">Search</button>
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
                                <tr id = "header">
                                    
                                    <th data-title = "fname">fname</th>
                                    <th data-title = "lname">lname</th>
                                    <th data-title = "customer_id">customer_id</th>
                                    <th data-title = "email">email</th>
                                    <th data-title = "password">password</th>
                                    <th data-title = "sex">sex </th>
                                    <th data-title = "driver_license">driver_license</th>
                                    <th data-title = "phonenumber">phonenumber</th>          
                                    <th data-title = "city">city</th> 
                                    <th data-title = "country">country</th>
                                    <th data-title = "report">Report</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if($items == null){
                                        $con = mysqli_connect("localhost","root","","car_rental_system");
                                        $query = "SELECT * FROM customer limit 20 ";
                                        $query_run = mysqli_query($con, $query);

                                        $items = $query_run;
                                    }
                                   

                                        // if(mysqli_num_rows($query_run) > 0)
                                        // {
                                            foreach($items as $item)
                                            {
                                                ?>
                                                <tr>
                                                    
                                                    <td><?= $item['fname']; ?></td>
                                                    <td><?= $item['lname']; ?></td>
                                                    <td><?= $item['customer_id']; ?></td>
                                                    <td><?= $item['email']; ?></td>
                                                    <td><?= $item['password']; ?></td>
                                                    <td><?= strcasecmp($item['sex'], "m") == 0? "Male":"Female"; ?></td>
                                                    <td><?= $item['driver_license']; ?></td>
                                                    <td><?= $item['phonenumber']; ?></td>
                                                   <td><?= $item['city']; ?></td>
                                                    <td><?= $item['country']; ?></td>
                                                    <td><button class="btn btn-success">Report</button></td>
                                                    
                                                    
                                                </tr>
                                                <?php
                                            }
                                        // }
                                    
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

    <script>

        function handleSearch() {
            return false;
        }

        function objectToQueryString(obj) {
            var str = [];
            for (var p in obj)
                if (obj.hasOwnProperty(p)) {
                str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                }
            return str.join("&");
        }

        function convertArrayToQuery(arr, name) {
            let str = []

            for(let i = 0; i < arr.length; i++) {
                let obj = arr[i];
                for (var p in obj){
                    if (obj.hasOwnProperty(p)) {
                        str.push(encodeURIComponent(name) + encodeURIComponent(`[${i}][${p}]`) + "=" + encodeURIComponent(obj[p]));
                    }
                }

                
            }

            return str.join("&");

        }

        let searchBar;
        let searchProperty
        function sendRequest() {
            searchBar = document.querySelector("#searchForm #searchBar");
            searchProperty =  document.querySelector("#searchForm #property");
            let result;
            $.post("search.php", {[searchBar.name]: searchBar.value, [searchProperty.name]: searchProperty.value},(data, status) => {
               result = JSON.parse(data);
               console.log(convertArrayToQuery(result, "items"));
               window.location.href = "index.php?" + convertArrayToQuery(result);
            })

        } 

        $("#searchBtn").click(e => {
            sendRequest()
        })

        
        function handleClick(event) {
            let button = event.target;
            let header = document.getElementById("header");
            let header_data = header.childNodes;
            let row = button.parentNode.parentNode;

            
            data = row.childNodes;
            let customer = {};
            for(let i = 0; i < data.length; i++) {
                let key = header_data[i].textContent;
                let value = data[i].textContent;

                if(data[i].nodeName == "TD") {
                    
                    customer[key] = value;
                }
            }

            let customer_id_query = "customer_id=" + customer["customer_id"];


            window.location.href=`report_view.php?${customer_id_query}`;
        }

        $(".table button").click(handleClick);

    </script>
</body>
</html>