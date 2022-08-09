<?php
require_once("config.php");
if(isset($_REQUEST["submit"])){
	$pattern1="/\d/";
	$pattern2="/[A-z]/";
	if(!preg_match($pattern1, $_REQUEST["password"]) || !preg_match($pattern2, $_REQUEST["password"])){
		echo "You password must contain atleast one digit,capital alphabet,small alphabet...";
	}
	else if($_REQUEST["password"]!=$_REQUEST["confirm"]){
		echo "password and confirm password does not match";
	}
	else if(!filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)){
		echo "enter valid email";
	}
	else if(!preg_match($pattern1, $_REQUEST["phone"]) && !count($_REQUEST["phone"])==10){
		echo "enter valid phone number";
	}
	else{
		$uname = $_REQUEST['username'];
		$pass = $_REQUEST['password'];
		$eml = $_REQUEST['email'];
		$ph = $_REQUEST['phone'];
		$bdate =$_REQUEST['dob'];
		$sql = "INSERT INTO users (username,password,email,phone,dob) VALUES ('$uname','$pass','$eml','$ph','$bdate')";
		if(mysqli_query($conn,$sql)){
			header("location:index.php");
		}
		else {
			echo '<script> alert ("Record not Saved") </script>';
		}
		
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sign Up</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style_signup.css">        
	</head>
	<body>
		<section class="contact">
			
			<div class="container">
	 
				<div class="contactForm">
					<form method="POST" action="">
						<h2>Sign Up</h2>
						<div class="inputBox">
							<input type="text" name="username" required="required" >
							<span>Username :</span>
						</div>
						<div class="inputBox">
							<input type="password" name="password" required="required" >
							<span>Password :</span>
						</div>
						<div class="inputBox">
							<input type="password" name="confirm" required="required" >
							<span>Conform Password :</span>
						</div>
						<div class="inputBox">
							<input type="text" name="email" required="required" >
							<span>Email :</span>
						</div>
						<div class="inputBox">
							<input type="text" name="phone" required="required" >
							<span>Phone No :</span>
						</div>
						<div class="inputBox">
							Birth Date :
							<input type="date" name="dob" required>
							
						</div>
						
						<div class="inputBox">
							<input type="submit" name="submit" value="Sign Up" >
							
						</div>
					</form>
				</div>
			   
			</div>
		</section>
	</body>
</html>