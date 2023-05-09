<!DOCTYPE html>
<html>
<head>
    <!--resize the window to adapt to your device mob or tablet or pc-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--to enable arabic language-->
    <meta charset="utf-8">
    <title>Car rental</title>
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </script>
</head>
<body>
    
    <?php
        include_once "../../header.php";
    ?>

    <div class="center">
        <h1 class="form__title">Create Account</h1>

        <div class="container">
        <form class="form" id="createAccount" action="save_employee.php" onsubmit="return validate_sign_up()"  method="post">
                <div class="form__input-group">
                    <input type="text" id="first_name" class="form__input" autofocus placeholder="First name"name="first_name" value required method ="post">
                    
                </div>
                <div class="form__input-group">
                    <input type="text" id="last_name" class="form__input" autofocus placeholder="Last name"name="last_name" value required method ="post">
                    
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" autofocus placeholder="Email Address"name="myemail"id="sign_Email" value required method ="post">
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" autofocus placeholder="Password"name="mypassword"id="pass1" value required method ="post">
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" autofocus placeholder="Confirm password"id="pass2" value required method ="post">
                </div>
                <div class="form__input-group">
                    <input type="text" id="title" class="form__input" autofocus placeholder="title"name="title" value required method ="post">
                    
                </div>
                <div class="form__input-group">
                    <input type="text" id="ssn" class="form__input" autofocus placeholder="ssn"name="ssn" value required method ="post">
                    
                </div>

                <div class="form__input-group">
                    <input type="text" id="sex" class="form__input" autofocus placeholder="Sex"name="sex" value required method ="post">
                    
                </div>

            
                <button class="form__button" type="submit">Continue</button>

        </form>
           
        </div>
    </div>
   
   
</body>
</html>

