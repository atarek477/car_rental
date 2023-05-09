<!DOCTYPE html>
<html>
  <head>

    <title>Car Booking Form</title>
    <link rel="stylesheet" href="../styles/reservation_form.css">
    
    </head>
  <body>
    <?php
        include_once "../header.php";
        $carID = $_GET["carID"];
        $cost = $_GET["costPerDay"];
    ?>
    <div class="testbox">
      <form action = "reserve.php" onsubmit = "return toggle()">
        <div class="banner">
          <h1>Car Reservation FORM</h1>
        </div>
        
        
        <div class="item">
          <p>Pick Up Date</p>
          <input id="pick_date" type="date" name="pdate" />
          <i class="fas fa-calendar-alt"></i>
        </div>

        <div class="item">
          <p> Return date</p>
          <input id="drop_date" type="date" name="rdate" />
          <i class="fas fa-calendar-alt"></i>
        </div>

        <div class="item">
          <p> Rental office location</p>
          <input required id="offic_loc" type="text" name="office_loc" />
        </div>

        <input id = "carID"  type="text" name = "carID" value = <?=$carID?> style = "display:none;">
        <input id = "cost" type="text" name = "totalPrice" value = <?=$cost?>  style = "display:none;">
       
        <div class="item">
      

     
      <p>Total cost <span class="price" style="color:black"><b id="priceView">$xxxx</b></span></p>
    </div>
        
        <div class="btn-block">
          <button id = "submit" type="submit" href="/">Total cost</button>
        </div>
      </form>
    </div>

    <script type="text/javascript">

        function objectToQueryString(obj) {
            var str = [];
            for (var p in obj)
                if (obj.hasOwnProperty(p)) {
                str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                }
            return str.join("&");
        }

        function toggle() {
          
          let button = document.getElementById("submit");

          let text = button.textContent;
          
          if(GetDays() < 0) {
            alert("Return date must be greater pickup date");
            return false
          }
          if(text == "Total cost") {
            let costInput = document.getElementById("cost");
            let value = costInput.value;
            let totalCost = value*GetDays();
            costInput.value = totalCost;
            let priceView = document.getElementById("priceView");
            priceView.innerHTML = totalCost;
            button.textContent = "BUY";
            return false;
          }

          return true;

        }

        function handle() {
          return "index.php";
        }

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
