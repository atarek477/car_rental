<?php

    include_once "connection.php";

    $email = $_POST["email"];
    $password = $_POST["pass"];
    $userType = $_POST["user_type"];

    session_start();
    $_SESSION["user"] = "none";

    
    
    if(strcasecmp($userType, "employee") == 0) {
        $query = "SELECT * FROM employee WHERE email = '$email';";
    } else {
        $query = "SELECT * FROM customer WHERE email = '$email';";
    }
    
    
    $result = mysqli_query($connection, $query);
    
    
    if($result->num_rows != 0) {
        $_SESSION["userType"] = $userType;

        $user = $result->fetch_assoc();
        if($user["password"] == $password) {
            $_SESSION["user"] = $user;
            echo"<script>
            window.location.href='index.php'
            </script>";
        } else {
            
            echo "<script>
            alert('Wrong credentials')
            window.location.href='sign_in.php'
            </script>";
        }
    } else {
        echo"<script>
            alert('Wrong credentials')
            window.location.href='sign_in.php'
        </script>";
        exit();
    }
    
?>