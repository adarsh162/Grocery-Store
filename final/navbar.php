<?php
    session_start();
    
    if (isset($_POST['cart'])){
      /// print_r($_POST['product_id']);
      if(isset($_SESSION['cart'])){
        
  
          $item_array_id = array_column($_SESSION['cart'], "product_id");
  
          if(in_array($_POST['product_id'], $item_array_id)){
              echo "<script>alert('Product is already added in the cart..!')</script>";
              // echo "<script>window.location = 'index.php'</script>";
          }else{
  
              $count = count($_SESSION['cart']);
              $item_array = array(
                  'product_id' => $_POST['product_id']
              );
  
              $_SESSION['cart'][$count] = $item_array;
          }
  
      }else{
  
          $item_array = array(
                  'product_id' => $_POST['product_id']
          );
  
          // Create new session variable
          $_SESSION['cart'][0] = $item_array;
          print_r($_SESSION['cart']);
      }
     
  }

?> 
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

/* .navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
} */
.topnav {
  overflow: hidden;
  font-family: Microsoft JhengHei UI Light;
  background-color: #1d2329;
  color: rgb(175, 163, 163);
  opacity:0.86;
  height:8%;
            }
  
.topnav a {
  padding: 16px;
  float: left;
  color: white;
  
  text-align: center;
  text-decoration: none;
  font-size: 17px;
  font-family: microsoft jhenghei ui light;
  background-color: #1d2329;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  
  color:white;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  background-color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
  background-color: white;
}

#search{
      margin-top:1%;
}
.cart{
    float: right;
    color:white;
    margin-top: 1%;
    margin-right: 2%;
    font-size: medium;
   
    
}
.logo{
    float:left;
}
</style>
</head>
<body>

<div class="topnav">
    <div class="logo">Logo</div>
  <a href="#home">Home</a>
 
  <div class="dropdown">
    <button class="dropbtn">Categories
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#" >Fruits & Vegetables</a>
      <a href="#" >Groceries</a>
      <a href="#" >Bakery</a>
      <a href="#" >Household Items</a>
      <a href="#" >Personal Care</a>
      <a href="#" >Beverages</a>
      <a href="#" >Eggs & NonVeg</a>
    </div>
  </div> 
  <a href="#news">About us</a>
  <a href="#news">Contact us</a>

  <div class="cart">
    <i class="fa fa-user" aria-hidden="true"></i> Your Account &nbsp;&nbsp;
    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
 </div>

<div class="box" >
    <input type="search" id="search" placeholder="Search..." />
    <a href="#" ><i class="fa fa-search"></i></a>

</div>
</div>

<div class="container">
	<h1 class="text-center text-danger mb-5" 
	style="font-family: 'Abril Fatface', cursive;">Personal Care</h1>
  <a href="cart.php">cart</a>

	<div class="row">

<?php

 $servername="localhost";
 $username="root";
 $password="";
 $database="Categories";

 $conn=mysqli_connect($servername,$username,$password,$database);
    // if(!$conn)
    //     die("Sorry we failed to connect to database");
    // else
    //     echo "Successful";  

    $sql="SELECT `id`, `name`, `image`, `price`, `quantity` FROM `products` order by id ASC ";
    $result = mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
    $i=1;

    if($num>0){
        while($product=mysqli_fetch_assoc($result)) {
        ?>

        <div class="col-lg-3 col-md-3 col-sm-12">
        <?php 
            if($i>4)
            echo"<br>";
        ?>

        <form action="product_pc.php" method="POST">
				<div class="card">
                <h6 class="card-title bg-info text-white p-2 text-uppercase"> <?php echo
					 $product['name'];  ?>   </h6>

                <div class="card-image">     
                <img src="<?php echo $product['image'];?>" alt="product" class="img-fluid mb-2" >
                </div>
                <div class="card-body">
                <h6><?php echo $product['quantity'];?></h6>
                <h6> &#8377; <?php echo $product['price'] ?></h6>
                <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                </div>

                <div class="btn-group d-flex">
						<button class="btn btn-success flex-fill" type="submit" name="cart"> Add to cart </button> 
            <input type='hidden' name='product_id' value=' <?php echo $product['id']; ?>'>
					</div>

                  </div>    
                </form>
                </div>
            
                

                <?php	
                $i++;	
		}
	}
	?>  
  

</div>



</body>
</html>
