<!DOCTYPE html>
<html>
  <head>
  

    <title>Car Booking Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/reservation_form.css">
    </head>
  <body>

  
    <?php
      include_once "../header.php";
    ?>
    <div class="testbox">
      <form action="save_car.php" onsubmit ="return handle()">
        <div class="banner">
          <h1>Add Car</h1>
        </div>
        <div class="item">
          <div class="name-item">
            <input id="name"  type="text" name="name" placeholder="Name" />
            <input  id="year" type="text" name="year" placeholder="year" />
            <input  id="plate_id" type="text" name="plate_id" placeholder="Plate id" />
            <input  id="vin" type="text" name="vin" placeholder="vin" />
            <input  id="color" type="text" name="color" placeholder="color" />
            <input  id="mileage" type="text" name="mileage" placeholder="mileage" />
            <input  id="city" type="text" name="city" placeholder="city" />
            <input  id="country" type="text" name="country" placeholder="country" />
            <input  id="model" type="text" name="model" placeholder="model" />
            <input  id="img_url" type="file" name="img_url" placeholder="img_url" />
            
          </div>
        
        
        <div class="btn-block">
          <button type="submit" href="/">SEND</button>
        </div>
      </form>
    </div>
  </body>

</html>