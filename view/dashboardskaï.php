<?php 
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION["loggedin"] !== true) {
  header("location: signUp.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>skaïgreen dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="./view_css/dashboardskaï.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function() {
    $('.click').click(function(event) {
        event.preventDefault();
        $('.popup_box').css({
            "opacity": "1",
            "pointer-events": "auto"
        });
    });
    $('.btn1').click(function() {
        $('.popup_box').css({
            "opacity": "0",
            "pointer-events": "none"
        });
    });
    $('.btn2').click(function() {
        $('.popup_box').css({
            "opacity": "0",
            "pointer-events": "none"
        });
        alert("Drone is in flight.");
    });
});

    </script>

<style>
		body {
			font-family: Arial, sans-serif;
			background-color: white;
		}
		h1 {
			text-align: center;
			margin-top: 30px;
			color: #333;
		}
		table {
			margin: 0 auto;
			border-collapse: collapse;
			border: 1px solid #00b415;
			background-color: #fff;
		}
		th, td {
			padding: 50px;
			border: 1px solid #00b415;
		}
		th {
			background-color: #00b415;
			color: #fff;
		}
	</style>

</head>

<body>
   
<div class="everything" id="blur">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><img src="https://img.icons8.com/badges/48/000000/experimental-city-buildings-badges.png"/>skaïgreen</h2>
        </div>

        <div class="sidebar-menu">
        <img src="data:image/jpeg;base64,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" id="rounded-icon">
            <ul>
                <li>
                <b><span id="mainName"> Nkunim </span></b>
                </li>

                <li>
                    <a href="dashboardskaï.php"class="active"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>

                <li>
                    <a href="coco_number.php"><span class="las la-tree"></span>
                    <span>Coconut Tree No.</span></a>
                </li>

                <li>
                    <a href="plants_defects.php"><span class="las la-hospital"></span>
                    <span>Plant Defects</span></a>
                </li>

                <li>
                    <a href=""><span class="las la-water"></span>
                    <span>Cultivation areas</span></a>
                </li>

                <!-- <li>
                    <a href="#"><span class="las la-calendar"></span>
                    <span>Past Flight Videos</span></a>
                </li> -->
                <li>
                    <a href=""><span class="las la-camera"></span>
                    <span>Grid Layout Images</span></a>
                </li>

                
                <li>
                    <a href=""><span class="las la-plane"></span>
                    <span class="click">Fly Drone</span></a>
                </li>

      
                <li>
                    <span>
                        <a href="#" style="display: inline-block;">
                            <span class="las la-info" style="display: inline-block;"></span>
                            <a href="#" onclick="toggle()" style="display: inline-block;">Help</a>
                        </a>
                    </span>
                </li>

              


                <br>
                <br>
                
                
                
                <li>
                    <form action="./construction-company-website-template-free/index.php">
                        <button type="submit" id="logout-button">logout</button></a>   
                    </form>
                </li>
                
            </ul>
        </div>
    </div>

    <div class="main-content">
   
        <header>
            <div class="header-title">
                <h2><label  for="">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>
        </header>
        <br>
        <br>
        <br>
        
  

    <!-- <h1>Farm Status Update</h1> -->
	<table>
		<thead>
			<tr>
				<th>Coconut Tree No.</th>
				<th>Defective Trees No.</th>
				<th>Healthy Trees (%)</th>
				<th>Unhealthy Trees (%)</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>

        

        <div class="popup_box">
            <i class="las la-exclamation" aria-hidden="true"></i>
            <h1>Your drone would be flown!</h1>
            <label>Are you sure want to proceed?</label> 
           <div class="btns"> 
                <a href="#" class="btn1">Do not fly</a><button type="submit" id="flyBtn" class="btn2" onclick="actualflyDrone()">Proceed Flight</button>
                <br>
                <br>       
            </div> 
        </div>
    </div>
</div>


<div id="popup">
    <h2>Thank you for choosing us!</h2>
    <p>For more information on usage of the drone, kindly visit the following link for more information: www.ryzerobotics.com </p>
    <a href="#" class= "close-btn" onclick="toggle()">Close</a>
</div>


<script type="text/javascript">
    function toggle(){
        var blur = document.getElementById('blur');
        blur.classList.toggle('active')

        var popup = document.getElementById('popup');
        popup.classList.toggle('active')
    }
</script>

<script>
    // Get the username from the URL query parameters
    const urlParams = new URLSearchParams(window.location.search);
    const username = urlParams.get('username');

    // Display the username on the current page
    document.addEventListener('DOMContentLoaded', function() {
      const usernameElement = document.getElementById('mainName');
      usernameElement.textContent = username;
    });
  </script>

<!-- <script>
function flyDrone() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4) {
      if (this.status == 200) {
        alert(this.responseText);
      } else {
        alert('Error: ' + this.status);
      }
    }
  };
  xhttp.onerror = function() {
    alert('Network error.');
  };
  xhttp.open('GET', 'flydrone.php', true);
  xhttp.send();
} -->

<!-- </script> -->

<!-- <script>
      function connectToDrone() {
        // execute Python script to connect to drone
        // code to connect to drone
      }

      function flyDrone() {
        // execute Python script to fly drone
        // open command prompt and prompt user for input
        var spawn = require("child_process").spawn;
        var process = spawn('python',["testingEcec.py"]);

        // prompt user for input when script runs
        process.stdout.on('data', function(data) {
          console.log(data.toString());
          if (data.toString().includes("Type 'command' to fly the drone")) {
            // get user input
            var input = prompt("Type 'command' to fly the drone");

            // pass user input to Python script
            process.stdin.write(input);
          }
        });
      }
</script> -->

<script>
    function actualflyDrone() {
  // execute Python script to fly drone
  const { spawn } = require("child_process");
  const process = spawn('python', ['testingEcec.py']);

  // prompt user for input when script runs
  process.stdout.on('data', (data) => {
    console.log(data.toString());
    if (data.toString().includes("Type 'command' to fly the drone")) {
      // get user input 
      const input = prompt("Type 'command' to fly the drone");

      // pass user input to Python script
      process.stdin.write(input + "\n");
    }
  });
}



document.getElementById("flyBtn").addEventListener("click", function() {
  // display confirmation popup
  document.querySelector(".popup_box").style.display = "block";
  
  // execute flyDrone function when user confirms
  document.querySelector(".btn2").addEventListener("click", flyDrone);
});

</script>


</body>
</html>
