<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
        <link rel="stylesheet" href="webstyle.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
           img{
               object-fit: cover;
           } 
           p ,h2{
               margin-left:20% ;
               margin-right:20%;
               font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
               font-size:large;
           }
           .grid-container {
               display: grid;
               grid-template-columns: auto auto auto;
  
               padding: 10px;
               margin-left:20% ;
               margin-right:20%;
}
.grid-item {
  
  padding: 20px;
  font-size: large;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  text-align:left;
}
        </style>
        <!-- <div class="header">
            
            <img src="farm.jpg" alt="image" width="100%" height="300px">
         
        </div> -->
    </head>
    <body>
        <div class="topnav">
        <div class="logo"><a href="HomePage.php"><img class="l" src="Logo.png"></a></div>
          <a href="HomePage.php">Home</a>
         
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
          <a  class="active" href="about_us.php">About us</a>
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
        <div class="header">
            
            <img src="farm.jpg" alt="image" width="100%" height="300px">
         
        </div>
        
          <h2>Our Vision</h2>
          <p>Nature's Closet is leading the charge in improving India???s vast grocery landscape through modern technology and innovation. We believe every Indian deserves the opportunity to continually improve their life - a process that often begins at home. As part of our mission of helping consumers make healthier, better choices when buying products, we make a wide range of high-quality grocery and household products accessible, affordable, and available right at their doorsteps.

            We know it???s an audacious goal, and are confident that we will meet this challenge. If this seems exciting to you, join us!</p> <br><br>
            <h2>Our Values</h2>

            <div class="grid-container">
                <div class="grid-item">Customer first<br><br>
                    For us our customer is always our first priority. We work hard to earn and keep their trust, and to bring them delight - through every interaction with us.</div>
                <div class="grid-item">Customer Satisfaction<br><br>
                   We always strive to fulfill the needs of our customers. Constant improvement for customer satisfaction is our motto.</div>
                <div class="grid-item">Customer Love<br><br>
                   We love our customers and always provide our authentic service to them, whole-heartedly.</div>  
                <div class="grid-item">Confidence<br><br>
                    We are tenacious, optimistic and do not take no for an answer. Our people are quietly confident and openly humble.</div>
                <div class="grid-item">Honesty<br><br>
                    We are pure, authentic and transparent. We speak our mind and provide speedy service to our customers</div>
                <div class="grid-item">Always Improvising<br><br>
                    We keep learning and evolving to be able to meet our audacious goal of empowering every Indian to lead a better life.</div> 
                  
              </div>
    </body>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"> Nature's Closet is leading the charge in improving India???s vast grocery landscape through modern technology and innovation. We believe every Indian deserves the opportunity to continually improve their life - a process that often begins at home.</p>
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