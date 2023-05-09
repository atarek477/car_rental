<!DOCTYPE html>
<html>
<head>
    <!--resize the window to adapt to your device mob or tablet or pc-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--to enable arabic language-->
    <meta charset="utf-8">
    <title>Car rental</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </script>
</head>
<body>
    
   <?php
        include_once "header.php";
   ?>

    <div class="center">
        <h1 class="form__title">Create Account</h1>

        <div class="container">
        <form class="form" id="createAccount" action="save_customer.php" onsubmit="return validate_sign_up()"  method="post">
                <div class="form__input-group">
                    <input type="text" id="first_name" class="form__input" autofocus placeholder="First name"name="first_name">
                    
                </div>
                <div class="form__input-group">
                    <input type="text" id="last_name" class="form__input" autofocus placeholder="Last name"name="last_name">
                    
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" autofocus placeholder="Email Address"name="email"id="sign_Email">
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" autofocus placeholder="Password"name="password"id="pass1">
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" autofocus placeholder="Confirm password"id="pass2">
                </div>
                <div class="form__input-group">
                    <input type="text" id="city" class="form__input" autofocus placeholder="City"name="city">
                    
                </div>
                <div class="form__input-group">
                    <input type="text" id="country" class="form__input" autofocus placeholder="Country"name="country">
                    
                </div>

                <div class="form__input-group">
                    <input type="text" id="license" class="form__input" autofocus placeholder="License"name="license">
                    
                </div>

                <div class="form__input-group">
                    <input type="text" id="sex" class="form__input" autofocus placeholder="Sex"name="sex">
                    
                </div>

                <div class="form__input-group">
                    <input type="text" id="phone_number" class="form__input" autofocus placeholder="Phone number"name="phone_number">
                    
                </div>
                <button class="form__button" type="submit">Continue</button>

        </form>
           
        </div>
    </div>
   
   
</body>
</html>

