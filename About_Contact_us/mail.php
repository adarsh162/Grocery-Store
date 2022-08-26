<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['text'];

$to ="ranadive.vrushali31@gmail.com";
$subject="Mail from contactus";
$txt="Name=" .$name. "\r\n Email =" . $email. "\r\n Message =" . $message;

$headers="From:noreply@gmail.com" ."\r\n";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    echo "Thank you!";

}
?>