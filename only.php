<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Members Only</title>
<link rel="stylesheet" href="style.css">
</head>

<body>





	
	
	
	
	
<!-- responsive navigation bar -->
<div class="topnav" id="myTopnav">
  <a href="members.php">members</a>
  <a href="#contact">contact</a>
  <a href="about.php">about</a>
  <a href="index.php">home</a>
  <p class="tablogo">Hangers</p>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

	
	<?php
	
	if (!empty($_SESSION['uid'])){
		echo 'Logged in as user '.$_SESSION['un'];
		echo '<br> Secret info here...';
	}
	else {
		echo 'Not logged in...';
	}
	
?>	
			
				
	<!-- center -->

<div class="background">
	
	
	
	<div class="mem">
	
		<div class="headlines" style="color: lightskyblue;">Lookbook</div>
		<div class="headlines">Subscription</div>
		<div class="headlines">Overview</div>
		
		
		
		<div class="gallery cf">
  <div>
    <img src="1.JPG" />
  </div>
  <div>
    <img src="2.JPG" />
  </div>
  <div>
    <img src="3.JPG" />
  </div>
  <div>
    <img src="4.JPG" />
  </div>
  <div>
    <img src="5.JPG" />
  </div>
  <div>
    <img src="6.JPG" />
  </div>
</div>
		
		
	</div>
	
	
</div>


<!-- footer -->
<div class="footera">

</div>

<div class="footer">
	<div class="f1">
	<p>Social Media<br><br>
	<img class="sm" src="facebook.png">
	<img class="sm" src="instagram.png">
	<img class="sm" src="plus.png">
	</p>
	
	</div>
	
	<div class="f2" id="contact">
	<p>Contact:<br><br>
	email:<span style="color:lightskyblue"> hangers@macsstudio.dk</span><br>
	phone number:<span style="color:lightskyblue"> (+45) 55 55 55</span><br>
	2500 Valby, Copenhagen, Denmark
	</p>
	
	</div>
	
	<div class="f3">
	<p>Want to become a member?<br>Join <a href="members.php" class="f3a">here!</a></p>
	
	</div>
	
	
	
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

</body>
</html>