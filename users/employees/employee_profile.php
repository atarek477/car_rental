<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../styles/navbarStyle.css" rel="stylesheet">

    <title>Profile</title>
    <style>
        .container {
            padding: 15px;

        }
        .container .flex {
            margin-bottom: 10px;
        }
        .fb {
            font-weight: bold;
        }


        .container .flex {
            display: flex;
            width: 90%;
            justify-content: space-between;

        }

        
    </style>
    
</head>
<body>
    
    <?php
        include_once "../../header.php";
        session_start();
        $user = $_SESSION["user"];
    ?>

    <div class="container card col-6 mt-4 d-flex align-items-center">
        <div class="flex">
            <label class = "fb">First name:</label>
            <label id="firstName" class = "ms-4"><?=$user["employee_fname"]?></label>
        </div>
        <div class="flex">
            <label class ="fb">Last name:</label>
            <label id = "lastName" class ="ms-4"><?=$user["employee_lname"]?></label>
        </div>
        <div class="flex">
            <label class ="fb">Email:</label>
            <label id = "email"><?=$user["email"]?></label>
        </div>
        <div class="flex">
            <label class ="fb">Sex:</label>
            <label id = "sex"><?=$user["sex"] = 'M'? "Male":"Female"?></label>
        </div>
        <div class="flex">
            <label class ="fb">Title:</label>
            <label id = "title"><?=$user["title"]?> </label>
        </div>
        <div class="flex">
            <label class ="fb">Ssn:</label>
            <label id = "ssn"><?=$user["ssn"]?> </label>
        </div>
                
    </div>

    
</body>
</html>