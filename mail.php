<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
// $subject= $_POST['subject'];
$message= $_POST['message'];
$to = "abdullahyaqoob38@mail.com";
$subject = "Mail From Flexlab";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@flexlab.io" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank.html");
?>