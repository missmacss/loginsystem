<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hangers by Macss</title>
<link rel="stylesheet" href="style.css">



<style>
	
	.ab {
		font-family: "Jellyka Saint-Andrew's Queen";
		color: black;
		font-size: 60px;
		padding-top:100px;
		height: 0;
		margin: 0;
		margin-left: 100px;
		
	}
	.abt {
		float: left;
		font-family:  "Tw Cen MT";
		margin-left: 800px;
		font-size: 20px;
		padding-top: 50px;
		
	}
	
	
	.mb {
		font-family: "Jellyka Saint-Andrew's Queen";
		color: black;
		font-size: 60px;
		padding-top:400px;
		height: 0;
		margin: 0;
		margin-left: 100px;
		
	}
	.mbt {
		float: left;
		font-family:  "Tw Cen MT";
		margin-left: 800px;
		font-size: 20px;
		padding-top: 50px;
		
	}
	
	.team {
		margin: 0;
		float: left;
		padding-right: 20px;
		padding-left: 300px;
		padding-top: 200px;
	}
	
	.pic {
		width: 200px;
		height: 200px;
		background-color: black;
		
	}
	
	.title {
		float: left;
		padding-right: 300px;
		padding-left: 0;
		padding-top: 150px;
		padding-bottom: 0;
	}
	
	.nom{
		font-family: "Jellyka Saint-Andrew's Queen";
		font-size: 50px;
		font-weight: bold;
		border-bottom: 1px solid black;
		
		
	}
	
	</style>




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


<!-- center -->

<div class="background">
	<div class="ab">
		<h1>About</h1>
		
	</div>
	
	<div class="abt">
		<p>lorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
		<p>lorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
		<p>lorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
		<p>lorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
	</div>
	
	
	
	<div class="mb">
		<h1>Members</h1>
	</div>
	
	
	<div class="mbt">
		<p>lorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
		<p>lorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
		<p>lorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
		<p>lorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
	</div>
	
	
	
	<div class="team">
		<div class="pic"></div>
	</div>
	
	<div class="title">
		
		<div class="nom"><p>Monica S.</p></div>
		<div style="margin: 0;padding: 0;"><p style="font-family:'Tw Cen MT';font-size: 20px;">Stylist/CEO</p></div>
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