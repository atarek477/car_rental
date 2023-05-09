<!DOCTYPE html>
<html>
<head>
    <!--resize the window to adapt to your device mob or tablet or pc-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--to enable arabic language-->
    <meta charset="utf-8">
    <title>Car rental</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/main.css">
    </script>
</head>
<body>
    
    <?php
        include("header.php");

        if(session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if(array_key_exists("user", $_SESSION)) {
            echo"<script>
                window.location.href = '/car_rental_system/index.php'
            </script>";
        }
    ?>
    <div class="center">
        <div class="container">
            <form class="form" id="login" onsubmit="return validate_login()" action="login.php" method="post">
                <h1 class="form__title">Login</h1>
                <div class="form__input-group">
                    <i class="fa fa-user" ></i>
                    <input required type="text" class="form__input" autofocus placeholder= "Email" name = "email" id = "Email">
                </div>
                <div class="form__input-group">
                    <i class="fa fa-lock" id="pa"></i>
                    <input required type="password" class="form__input" autofocus placeholder="Password"name="pass"id="Password">
                   <span > <i class="fa fa-eye"aria-hidden="true" id="eye" onclick="toggle()"></i> </span> 
                </div>

                <div class="flex mb1">
                    <input required type="radio" id="customer" name="user_type" value="customer" >
                    <label for="customer" class = "fs">Customer</label>
                    <input required type="radio" id="employee" name="user_type" value="employee" >
                    <label for="employee" class = "fs">Employee</label>
                </div>
                
                <button class="form__button mb-1" type="submit" value="submit">Continue</button>
            </form>
           
        </div>
    </div>
   
    <script>
        var state=true;
        function toggle(){
            if(state){
                document.getElementById("Password").setAttribute("type","password");
                document.getElementById("eye").style.color='#7a797e';
                state=false;
            }
            else{
                document.getElementById("Password").setAttribute("type","text");
                document.getElementById("eye").style.color='#5887ef';
                state=true;
            }
        }
    </script>
</body>
</html>