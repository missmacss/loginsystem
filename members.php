<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hangers by Macss</title>
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


<!-- center -->

<?php

if(!empty(filter_input(INPUT_POST, 'submit'))) {

	require_once('dbcon.php');
	
	$un = filter_input(INPUT_POST, 'un') 
		or die('Missing/illegal name parameter');
	$pw = filter_input(INPUT_POST, 'pw') 
		or die('Missing/illegal password parameter');

	$sql = 'SELECT id, pwhash FROM login WHERE user=?';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('s', $un);
	$stmt->execute();
	$stmt->bind_result($uid, $pwhash);

	while ($stmt->fetch()) {} // fill result variables
	
	if (password_verify($pw, $pwhash)){
		echo 'logged in as user '.$uid;
		$_SESSION['uid'] = $uid;
		$_SESSION['un'] = $un;
	}
	else {
		echo 'illegal username/password combination';
	}
}
	
	
	if (isset($_POST['submit'])) {
		?>
		<script type="text/javascript">
		setTimeout(function(){window.location.href='only.php'}, 2000);
	</script>
	<?php
	}
	
?>


<div class="background">


<div class="log">
		
		<p>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	
    	<legend>Already a Member?</legend>
    	<input name="un" type="text" placeholder="Username" required /><br>
    	<input name="pw" type="password" placeholder="Password"  required/><br>
    	<input type="submit" name="submit" value="Login" />
	
</form>
</p>
		
		
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php

if(!empty(filter_input(INPUT_POST, 'submit'))) {
	
	require_once('dbcon.php');
	
	$un = filter_input(INPUT_POST, 'un') 
		or die('Missing/illegal name parameter');
	$pw = filter_input(INPUT_POST, 'pw') 
		or die('Missing/illegal password parameter');

	// hash and salt the password
	$pw = password_hash($pw, PASSWORD_DEFAULT); 
	
//	echo 'Creating user: '.$un.' => '.$pw;
	
	$sql = 'INSERT INTO login (user, pwhash) VALUES (?,?)';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('ss', $un, $pw);
	$stmt->execute();
	
	if ($stmt->affected_rows >0){
		echo 'user ['.$un.'] is added :-)';
	}
	else {
		echo 'Error adding user ['.$un.'] does this user already exist?';
	}
}
?>
	
	
	
	
	
	<div class="sign">
		
		<p>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	
    	<legend>Interested in our Services?</legend>
    	<input name="un" type="text" placeholder="Username" required /><br>
    	<input name="pw" type="password" placeholder="Password"  required/><br>
    	<input type="submit" name="submit" value="Sign Up" />
	
</form>
</p>
		
		
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