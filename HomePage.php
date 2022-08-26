<?php 
  session_start();
  require_once("config.php");
  if(isset($_SESSION['login']))
  $email=$_SESSION["login"]["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nature's Closet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="webstyle.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
  <style>
   .navbar{
      border-radius: 0;
      overflow: hidden;
      background-color: #333;
      position:fixed;
      top: 0;
      width: 100%;
      height:8%;
     
    }
    

.navbar a:hover {
  background: rgb(20, 20, 20);
  color: black;
  
}
    .carousel-inner img {
      width: 100%;
      height:50px;
      min-height: 50px;
      margin:auto;
    }
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
     
     .jumbotron {
      margin-bottom: 0;
     
    }
   
    
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .navbar .box{
    padding-left: 550px;
    padding-top: 20px;
    
}
 .navbar.social-links{
    margin-left: 345px;
   
    top: 30px;
    display: inline;
    background-color: #ffffff;

}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  margin-left:200px;
  margin-right:200px;
  padding: 20px;
  margin-top:7%;

}
.grid-item {
  
  padding: 30px;
  font-size: 30px;
  text-align: center;
}
.grid-item:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.image{
  display: block;
  width: 100%;
  height: auto;
}
.row{
 width:100%;
 

}
h3{
    margin:20px;
    margin-top:25%;
}
.sale{
  background-color:pink;
  background-image:url("yellow.jpg");
  
  position:absolute;
  height:50%;
  width:100%;

}
.timer{
  /* margin:40%; */
  margin:3%;
  height:300px;
  background-color:white;
  text-align:center;
  padding:150px;
}
p{
   display:inline;
   font-size:30px;
   text-align:center;
   padding:0.5%;
   transform:translate(0,-10px);
  
   
  
   
   
  }
  h1,h2{
    transform:translate(0,-100px);
    position: relative;
    font-family: 'Lobster Two', cursive;
  }
  h4{
    transform:translate(0,-100px);
  }
  /* p{
    transform:translate(0,-40px);
  }
   */
   .count{
     background-color:red;
     border-radius:80%;
     width:25px;
     transform:translate(-30px,25px);
     margin-left: 20px;
   }

  </style>
</head>
<body>

    
      <div class="topnav">
    <div class="logo"><a href="HomePage.php"><img class="l" src="Logo.png"></a></div>
  <a class="active" href="HomePage.php">Home</a>
 
  <div class="dropdown1">
    <button class="dropbtn">Categories
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown1-content">
      <a href="vegetables and fruits.php" >Fruits & Vegetables</a>
      <a href="Packaged Items.php" >Groceries</a>
      <a href="Bakery.php" >Bakery</a>
      <a href="Household Items.php" >Household Items</a>
      <a href="product_pc.php" >Personal Care</a>
      <a href="product_b.php" >Beverages</a>
      <a href="product_n.php" >Eggs & NonVeg</a>
    </div>
  </div> 
  <a href="about_us.php">About us</a>
  <a href="contact_us2.php">Contact us</a>

  <div class="cart">
    <a href="My Account.php"><i class="fa fa-user" aria-hidden="true"></i> Your Account</a> &nbsp;&nbsp;
    <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true">Cart</i><span class="count">1</div>
 </span></a>

<div class="box" >
    <input type="search" id="search" placeholder="Search..." />
    <a href="#" ><i class="fa fa-search"></i></a>

</div>
</div>
      <br><br><br><br>
      <!-- <h1>Offers</h1> -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/NatureCloset.png" alt="Image">
        <div class="carousel-caption">
          <h3 style="color:black">Hot Deals</h3>
          <p style="color:black">Fresh Products</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/webbanner2.png" alt="Image">
        <div class="carousel-caption">
          <h3>Suprising Offers</h3>
          <p>Happy Deals</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<br>
<div class="sale"> <div class="timer">
  <h1>Nature's Closet Special</h1>
  <h2>Sale Ends in</h2>
<p id="demo1"></p>
<p id="demo2"></p>
<p id="demo3"></p>
<p id="demo4"></p>
<p id="demo5"></p>
<p id="demo6"></p>
<h4 id="end"></h3>
</div>
</div>
  <hr>  
   
    <br>
    <h3>Shop By Categories</h3>
    <div class="grid-container">
    
      <div class="grid-item"><img src="images\vegetable.png" alt="image" class="image"><br>Fruits & Vegetables<br></div>
      <div class="grid-item"><img src="images\staple.png" alt="image" class="image"><br>Groceries<br></div>
      <div class="grid-item"><img src="images\bread2.png" alt="image" class="image"><br>Bakery<br></div>  
      <div class="grid-item"><img src="images\household2.png" alt="image" class="image"><br>Household Items<br></div>
      <div class="grid-item"><img src="images\personal_care3.png" alt="image" class="image"><br>Personal Care<br></div>
      <div class="grid-item"><img src="images\beverages.png" alt="image" class="image"><br>Beverages<br></div>  
      <div class="grid-item"><img src="images\non_veg.png" alt="image" class="image"><br>Eggs & Non Veg<br></div>
       
    </div>
  


    
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

<script>
    setInterval(showTime,1000);
    function showTime(){
const current_date=new Date();
const fixed_date=new Date("jul 21, 2021 14:53:00");
timediff=fixed_date.getTime()-current_date.getTime();
const days=Math.floor(timediff/(24*60*60*1000));
const hours=Math.floor((timediff % (24*60*60*1000))/ (60*60*1000));
const mins=Math.floor((timediff % (60*60*1000)) / (60*1000));
const secs=Math.floor((timediff % (60*1000)) / 1000);



document.getElementById("demo1").innerHTML= days +"d" ;
document.getElementById("demo2").innerHTML= hours +"h" ;
document.getElementById("demo3").innerHTML= mins +"m" ;
document.getElementById("demo4").innerHTML= secs +"s" ;

if (timediff < 0) {
    clearInterval(showTime);
    document.getElementById("demo1").innerHTML = ""
    document.getElementById("demo2").innerHTML = "" 
    document.getElementById("demo3").innerHTML = ""
    document.getElementById("demo4").innerHTML = ""
    document.getElementById("end").innerHTML = "Sale Over!!";
}


    }



</script>
      

</body>
</html>