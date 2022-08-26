<!DOCTYPE html>
<html>
<head>
  <title>Personal Care</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="webstyle.css" type="text/css">
  <style type="text/css">
    .img{height: 250px;width: 200px;}
  </style>
</head>
<body>
<div class="topnav">
<div class="logo"><a href="HomePage.php"><img class="l" src="Logo.png"></a></div>
  <a  href="HomePage.php">Home</a>
 
  <div class="dropdown1">
    <button class="dropbtn">Categories
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown1-content">
      <a class="active" href="vegetables and fruits.php" >Fruits & Vegetables</a>
      <a href="Packaged Items.php" >Groceries</a>
      <a href="Bakery.php" >Bakery</a>
      <a href="Houshold Items.php" >Household Items</a>
      <a  href="product_pc.php" >Personal Care</a>
      <a href="product_b.php" >Beverages</a>
      <a href="product_n.php" >Eggs & NonVeg</a>
    </div>
  </div> 
  <a href="about_us.php">About us</a>
  <a href="contact_us2.php">Contact us</a>

  <div class="cart">
    <a href="My Account.php"><i class="fa fa-user" aria-hidden="true"></i> Your Account</a> &nbsp;&nbsp;
    <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
 </div>

<div class="box" >
    <input type="search" id="search" placeholder="Search..." />
    <a href="#" ><i class="fa fa-search"></i></a>

</div>
</div>
<div class="container">
  <h1 class="text-center text-danger mb-5" style="font-family: 'Abril Fatface',cursive;">Personal Care</h1>
  <div class="row">
    <?php
    session_start();
    //$email=$_SESSION["login"]["email"];
  require_once("config.php");
  $sql='SELECT `id`,`name`, `image`, `quantity`, `price` FROM `products` WHERE type="personal care"';
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if(isset($_REQUEST["add"]))
  {
    if(!isset($_SESSION["login"]))
    {
      echo "<script>alert('In order to add items in cart,you need to login...')</script>";
      header('location:index.php');
    }
    else
    {
      $email=$_SESSION["login"]["email"];
      if(isset($_SESSION["cart"]["$email"]))
      {
        $item_array_id=array_column($_SESSION["cart"]["$email"],"pro_id");
        if(in_array($_REQUEST["id"], $item_array_id))
        {
          echo "<script>alert('Product is already added in the cart')</script>";
          echo "<script>window.location='vegetables and fruits.php'</script>";
        }
        else
        {
          $len=count($_SESSION["cart"]["$email"]);
          $item_array=array('pro_id'=>$_REQUEST["id"]);
          $_SESSION["cart"]["$email"][$len]=$item_array;
          $quantity=array('q'=>$_REQUEST["quantity"]);
          $_SESSION["q"][$len]=$quantity;
          echo "<script>alert('Added to cart')</script>";
          echo "<script>window.location='vegetables and fruits.php'</script>";
        }
      }
      else
      {
        $item_array=array('pro_id'=>$_REQUEST["id"]);
        $_SESSION["cart"]["$email"][0]=$item_array;
        $quantity=array('q'=>$_REQUEST["quantity"]);
        $_SESSION["q"][0]=$quantity;
        echo "<script>alert('Added to cart')</script>";
      }
    }
  }
  $i=1;
  if($num>0)
  {
    while($row=mysqli_fetch_array($result))
    {
      ?>
      <div class="col-lg-3 col-md-3 col-sm-12">
        <?php
          if ($i>4)
          echo "<br>";
        ?>
        <form>
          <div class="card">
            <h6 class="card-title bg-info text-white p-2 text-uppercase "><?php echo $row["name"]; ?> </h6>
            <div class="card-body">
              <img class="img"src=<?php echo $row["image"]; ?> alt="<?php echo $row["name"]; ?> class="img-fluid mb-2">
            <h6 ><?php echo $row["quantity"]; ?> </h6>
            <h6 >&#8377;<?php echo $row["price"]; ?> </h6>  
            <input type="text" name="quantity" class="form-control" placeholder="Quantity" required>            
            </div>
            <div class="btn-group d-flex">
              <button class="btn btn-success text-white" name="add">Add to cart</button>
              <input type="hidden" name="id" value=<?php echo $row["id"]; ?>>
            </div> 
          </div>
        </form>
      </div>
      <?php
      $i++;
    }
  }
  else
  {
    echo "no results found";
  }
?>
  </div>
</div>
<br><br>
</body>
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"> Nature's Closet is leading the charge in improving India’s vast grocery landscape through modern technology and innovation. We believe every Indian deserves the opportunity to continually improve their life - a process that often begins at home.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="vegetables and fruits.php">Fruits & Vegetables</a></li>
              <li><a href="Packaged Items.php">Groceries</a></li>
              <li><a href="Bakery.php">Bakery</a></li>
              <li><a href="Houshold Items.php">Household Items</a></li>
              <li><a href="product_pc.php">Personal Care</a></li>
              <li><a href="product_b.php">Beverages</a></li>
              <li><a href="product_n.php">Eggs & NonVeg</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="about_us.php">About Us</a></li>
              <li><a href="contact_us2.php">Contact Us</a></li>
              
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="HomePage.php">Nature's Closet</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</html>
