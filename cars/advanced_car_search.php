<!DOCTYPE html>
<html>
  <head>

    <title>Car Booking Form</title>
    <link rel="stylesheet" href="../styles/reservation_form.css">
    
    </head>
  <body>
    <?php
        include_once "../header.php";
    ?>
    <div class="testbox">
      <form action="search_car.php" method ="POST">
        <div class="banner">
          <h1>Car Reservation FORM</h1>
        </div>
        <div class="item">
          <div>
            <input id="name"  type="text" name="name" placeholder="Name" />
          </div>
        
        
        <div class="item">
          <input id="model" type="text" name="model" placeholder="Model" />
        </div>

        <div class="item">
          <input id="color" type="text" name="color" placeholder="Color" />
        </div>
       
        <div class="item">
          <input id="year" type="year" name="year" placeholder="Year" />
        </div>


        <div class="btn-block">
          <button type="submit" href="/">Search</button>
        </div>
      </form>
    </div>

    <script type="text/javascript">
        function GetDays(){
                var dropdt = new Date(document.getElementById("drop_date").value);
                var pickdt = new Date(document.getElementById("pick_date").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }
      

        function cal(){
        if(document.getElementById("drop_date")){
            document.getElementById("numdays2").value=GetDays();
        }  
    }

    </script>
  </body>
</html>
