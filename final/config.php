<?php
$server="localhost";
$username="root";
$password="";
$name="categories";
$conn=mysqli_connect($server,$username,$password,$name);
if(!$conn)
{
	die("Could not connect." . mysqli_connect_error());
}
?>