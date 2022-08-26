<?php
require_once("config.php");
session_start();
$email = $_SESSION["login"]["email"];
require_once("functions.php");
$i=0;
$q=function()
{
	global $i;
	foreach($_SESSION['q'] as $key=>$value)
										{
											if($i==$key)
											{
												$i++;
											return $value['q'];
										}
    									} 
};
if(isset($_REQUEST["remove"]))
{
	if($_GET["action"]=="remove")
	{
		foreach ($_SESSION["cart"]["$email"] as $key => $value) {
			if($value["pro_id"]==$_GET["id"])
			{
				unset($_SESSION["cart"]["$email"][$key]);
				echo "<script>alert('Product has been Removed')</script>";
				echo "<script>window.location='cart.php'</script>";
			}
		}
	}
}
if(isset($_REQUEST["minus"]))
{
	$index=$_POST["index_of_q"]-1;
	if($_SESSION["q"][$index]["q"]==1)
	{

	}
	else
	{
		$_SESSION["q"][$index]["q"]--;
	}
}
if(isset($_REQUEST["plus"]))
{
		$_SESSION["q"][$_POST["index_of_q"]-1]["q"]++;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="bootstrap.css"> -->

    <meta charset="utf-8">
    <title>My Cart</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <link rel="stylesheet" href="webstyle.css" type="text/css">
	<style type="text/css">
		.shopping-cart{padding: 3%0;}
  	.cart-items{padding:2%0;}
  	.price-details{padding: 3%2%}
  	.img{height: 150px;}
	.button{
	 position:relative;
     width:100%;
     margin-top: 10px;
     padding-top: 10px;
	 top: 50%;
	 padding-left: 68%;
	}
	.button [type=button] {
	 display: block;
    
	 width: 85%;
     background-color: #26ff00;
     color: #fff;
     font-size: 18px;
     border-radius:10px;
     line-height: 35px;
     cursor: pointer;
	  }
	  .button [type=button]:hover{
		  transform: scale(1.06);
		  -webkit-transform: scale(1.06);
	  }
	</style>
<div class="topnav">
<div class="logo"><a href="HomePage.php"><img class="l" src="Logo.png"></a></div>
  <a  href="HomePage.php">Home</a>
 
  <div class="dropdown1">
    <button class="dropbtn">Categories
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown1-content">
      <a href="vegetables and fruits.php" >Fruits & Vegetables</a>
      <a href="Packaged Items.php" >Groceries</a>
      <a class="active" href="Bakery.php" >Bakery</a>
      <a href="Houshold Items.php" >Household Items</a>
      <a href="product_pc.php" >Personal Care</a>
      <a href="product_b.php" >Beverages</a>
      <a href="product_n.php" >Eggs & NonVeg</a>
    </div>
  </div> 
  <a href="about_us.php">About us</a>
  <a href="contact_us2.php">Contact us</a>

  <div class="cart">
    <a href="My Account.php"><i class="fa fa-user" aria-hidden="true"></i> Your Account</a> &nbsp;&nbsp;
    <a class="active" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
 </div>

<div class="box" >
    <input type="search" id="search" placeholder="Search..." />
    <a href="#" ><i class="fa fa-search"></i></a>

</div>
</div>

</head>
<body class="bg-light">
	
	<div class="container-fluid">
		<div class="row px-5">
			<div class="col-md-7">
				<div class="shoppint-cart">
					<h6>My Cart</h6>
					<hr>
					<?php
					$total=0;
					if(isset($_SESSION["cart"]["$email"]))
					{
						$product_id=array_column($_SESSION["cart"]["$email"],"pro_id");
						$sql="SELECT * FROM products";
						$result=mysqli_query($conn,$sql);
						$key=0;
						while($row=mysqli_fetch_array($result))
						{
							foreach ($product_id as $id) {
								if($row["id"]==$id)
								{ 
									cartelement($row["image"],$row["name"],$row["price"],$row["id"],$q(),$row["id"]);
									$total=$total+($row["price"]*$_SESSION["q"][$key]["q"]);
									$key++;
								}
							}
						} 
					}
				else
				{
					echo "<h6>Cart is Empty</h6>";
				}
				?>
				</div>
			</div>
			<div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
				<div class="pt-4">
					<h6>PRICE DETAILS</h6>
					<hr>
					<div class="row price-details">
						<div class="col-md-6">
							<?php
								if(isset($_SESSION["cart"]["$email"]))
								{
									$count=count($_SESSION["cart"]["$email"]);
									echo "<h6>Price($count items)</h6>";
								}
								else
								{
									echo "<h6>Price(0 items)</h6>";
								}
							?>
							<h6>Delivery Charges</h6>
							<hr>
							<h6>Amount Payable</h6>
						</div>
						<div class="col-md-6">
							<h6>&#8377;<?php  
								echo $total;
							?></h6>
							<h6 class="text-sucess">FREE</h6>
							<hr>
							<h6>&#8377;<?php  
								echo $total;
							?></h6>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="button">
		<a href="Payment.php"><input type="button" name="" value="Pay Now"></a>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>