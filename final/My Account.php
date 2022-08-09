<?php
session_start();
require_once("config.php");
if(isset($_POST["logout"]))
{
    unset($_SESSION['login']);
    header('location:index.php');
}
if(isset($_POST["user"]))
{
    header('location:change.php');
}
if(isset($_SESSION["login"]))
{
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Log in</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="style_account.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <style>

.topnav {
  overflow: hidden;
  font-family: Microsoft JhengHei UI Light;
  background-color: #1d2329;
  color: rgb(175, 163, 163);
  opacity:0.86;
  height:8%;
  width:100%;
  
  
  
            }
  
.topnav a {
  padding: 16px;
  float: left;
  color: white;
  
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  font-family: microsoft jhenghei ui light;
  background-color: #1d2329;
}

.dropdown1 {
  float: left;
  overflow: hidden;
  
}

.dropdown1 .dropbtn {
   
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  font-size:16px;
}

.topnav a:hover, .dropdown1:hover .dropbtn {
  
  background-color:grey;
  text-decoration: none;
  color: black;
  
}
.topnav .active{
  background-color:#ddd;
  color:black;
}

.dropdown1-content {
  display: none;
  position: absolute;
  background-color:white;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-size:15px;
}

.dropdown1-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display:inline;
  text-align: left;
  background-color:#4d94ff;
  border-radius:5%;
  font-size:18px
}

.dropdown1-content a:hover {
  background-color: #ddd;
  
}

.dropdown1:hover .dropdown1-content {
  display: block;
  background-color: white;
}

#search{
      margin-top:1%;
}
.cart{
    float: right;
    color:white;
    
    margin-right: 2%;
    font-size: medium;
   
    
}
.logo{
    float:left;
}
.logo .l{
  width:45px;
  height:45px;
  transform: translate(0,-10px);
}


.card-image{
  height:300px;
  
}


.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}

a{
  text-decoration: none;
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
  <a href="contact_us2.php">Contact us</a>

  <div class="cart">
    <a class="active" href="My Account.php"><i class="fa fa-user" aria-hidden="true"></i> Your Account</a> &nbsp;&nbsp;
    <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
 </div>

<div class="box" >
    <input type="search" id="search" placeholder="Search..." />
    <a href="#" ><i class="fa fa-search"></i></a>

</div>
</div>

            <section class="contact">
               
                
                <div class="container">
                       
         
                    <div class="contactForm">
                        <form method="POST" action="">
                            
                            <h2>Your Account</h2>
                            <br>
                            
                            <h4>Username : <?php echo $_SESSION["login"]["username"]; ?></h4>
                            <h4>Email : <?php echo $_SESSION["login"]["email"]; ?></h4>
                            <h4>Birthdate : <?php echo $_SESSION["login"]["dob"]; ?></h4>
                         
                            <div class="inputBox">
                                <a href=""><input type="submit" name="pass" value="Change Password"></a>
                            </div>
                            
                                <div class="inputBox1">
                                    <a href="Sign Up.html"><input type="submit" name="user" value="Change Name"></a>
                                
                            <div class="inputBox2">
                                <input type="submit" name="logout" value="Logout">
                            </div>   
                                
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
    </html>
    <?php
}
else
{
    echo "<script>alert('You have not logged in,click OK to login')</script>";
    echo "<script>window.location='index.php'</script>";
}