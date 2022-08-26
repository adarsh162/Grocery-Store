<?php include 'sendemail.php' ; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact us</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style_contact.css">
        <link rel="stylesheet" href="webstyle.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <style>
            h1{
                transform:translate(0,-80px);
                color:white;
                font-family: 'Roboto', sans-serif;
                font-size:40px;
            }
            h3{
                transform:translate(0,-20px);
            }
            .p1{
                font-size:20px;
                transform:translate(0,-20px);
                color:black;
            }
            
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
  <a class="active" href="contact_us2.php">Contact us</a>

  <div class="cart">
    <a href="My Account.php"><i class="fa fa-user" aria-hidden="true"></i> Your Account</a> &nbsp;&nbsp;
    <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
 </div>

<div class="box" >
    <input type="search" id="search" placeholder="Search..." />
    <a href="#" ><i class="fa fa-search"></i></a>

</div>
</div>

        <?php echo $alert;?>
        <section class="contact">
            <div class="content">
                <h1>Contact Us</h1>
                
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                        <h3 style="color:black; font-size:30px;">Address</h3>
                        <p class="p1">Nature's Closet, Vadodara </p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                        <h3 style="color:black; font-size:30px;">Call Us</h3>
                        <p class="p1">9807349067</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text">
                        <h3 style="color:black; font-size:30px;">Email</h3>
                        <p class="p1">naturescloset@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form >
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="name" required="required" >
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" required="required" >
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required" name="text"></textarea>
                            <span>Type Your Message</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="Send" value="Send" >
                            
                        </div>
                    </form>
                </div>
               
            </div>
        </section>
       
    
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
</body>
<script type="text/javascript">
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
        </script>
</html>