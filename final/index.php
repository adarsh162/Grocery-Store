<?php
session_start();
if(isset($_SESSION["login"]))
{
    header('location:HomePage.php');
}
require_once("config.php");
    if(isset($_POST["Send"]))
    {
        $user=$_POST["username"];
        $pass=$_POST["password"];
        $sql="SELECT * FROM `users` WHERE username='$user'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        if($row["password"]==$pass)
        {
            $email=$row["email"];
            $_SESSION["login"]["email"]=$email;
            $_SESSION["login"]["username"]=$row["username"];
            $_SESSION["login"]["dob"]=$row["dob"];
            header('location:HomePage.php');
        }
        else
        {
            echo "<script>alert('Invalid username/password!')</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log in</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style_login.css">
        

    </head>
    <body>
        <section class="contact">
            
            <div class="container">
     
                <div class="contactForm">
                    <form method="POST" action="">
                        
                        <h2>Sign in to Your Account</h2>
                        
                        <div class="inputBox">
                            <input type="text" name="username" required="required" >
                            <span>Username :</span>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" required="required" >
                            <span>Password :</span>
                        </div>
                        <div class="inputBox">
                            <a href="Sign Up.php"><input type="button" name="" value="Create New Account" style="text-decoration:none;"></a>
                            
                            <input type="submit" name="Send" value="Log in" >
                            
                        </div>
                    </form>
                    <a href="reset_password_index.php">Forgot Password</a>
                </div>
               
            </div>
        </section>
    </body>
</html>