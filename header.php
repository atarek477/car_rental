<nav>
    <div class="flex">
       
        <h1>Car rental</h2>

        <ul id ="links" class="flex">
            <li><a href="/car_rental_system/index.php">Home</a></li>
            <li><a href="/car_rental_system/sign_in.php">Sign in</a></li>
            <li><a href="/car_rental_system/sign_up.php">Sign up</a></li>
        </ul>
    </div>
</nav>

<script>
    let user;
    const getUser = async(url) => {
        let data = await fetch(url)
        .then(result => {user = result.json()})
        return user;
    }
    
    getUser("/car_rental_system/get_user.php").then(user => {
        let links = document.getElementById("links");
        let profile = user.hasOwnProperty("title")? "employee_profile.php" : "customer_profile.php";

        if(user == "none") {
            links.innerHTML = "<li><a href='/car_rental_system/index.php'>Home</a></li><li><a href='/car_rental_system/sign_up.php'>Sign up</a></li>";
        }
        if(!user.hasOwnProperty("title")) {
                
                links.innerHTML = `<li><a href='/car_rental_system/index.php'>Home</a></li><li><a href='/car_rental_system/cars/advanced_car_search.php'>Reserve</a></li><li><a href=/car_rental_system/users/customers/${profile}>Profile</a></li><li><a href='/car_rental_system/logout.php'>Logout</a></li>`;
        } else {
            if(user["title"] == "admin") {

                links.innerHTML = `<li><a href='/car_rental_system/index.php'>Home</a></li><li><a href='/car_rental_system/users/employees'>Employee</a></li><li><a href='/car_rental_system/users/customers'>Customers</a></li><li><a href='/car_rental_system/cars/'>Cars</a></li><li><a href=/car_rental_system/users/employees/${profile}>Profile</a></li><li><a href='/car_rental_system/logout.php'>Logout</a></li>`;
            } else if(user["title"] != "admin") {

                links.innerHTML = `<li><a href='/car_rental_system/index.php'>Home</a></li><li><a href='/car_rental_system/users/customers'><li><a href='/car_rental_system/cars/'>Cars</a></li><li><a href=/car_rental_system/users/employees/${profile}>Profile</a></li><li><a href='/car_rental_system/logout.php'>Logout</a></li>`;
            } 
        }
        
    });
    

</script>

<?php
    
    // echo 
    // "<script>
    // let title = document.getElementById('data').textContent;
    // console.log(title);
    // if(title == 'admin') {
    //     links = document.getElementById('links');
    //     links.innerHTML = '<li>hello</li>';
    // }
    // </script>;";
?>

