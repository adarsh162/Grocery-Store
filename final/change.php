<?php
	session_start();
	require_once("config.php");
	if(isset($_POST["user"]))
	{
		$sql="UPDATE `users` SET `username` = ".$_POST['new_username']." WHERE `username` = ".$_SESSION['login']['username'];
		echo $sql;
		$result=mysqli_query($conn,$sql);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Data</title>
</head>
<body>
	<form method="POST" action="">
    Enter Your New Username: 
    <input type="text" name="new_username" required=""><br>
    <input type="submit" name="user">
</form>
</body>
</html>
 