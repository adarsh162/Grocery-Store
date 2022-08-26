<?php
session_start();
include_once 'config.php';
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $sql = "SELECT * FROM user where username='" . $_POST['username'] . "'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result); 
	$user_id=$row['username'];
	$email_id=$row['email'];
	$id = $row['id'];
	
    if($username==$user_id) {
	    $to = $email_id;
	    $txt = "Hi, $username. Click http://localhost/Grocery%20Store/reset_password.php?id=$id to reset the password";
	    $headers = "From: anshigandhi@gmail.com\r\n";
	    $subject = "Reset Password";
	    $msg=mail($to,$subject,$txt,$headers);
	    if($msg){
	    	$_SESSION['msg'] = 'password link sent';
        }
	    else{
	    	echo "mail was not sent!!";
	    }
    } 
    else{
		echo 'invalid userid';
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='username'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>