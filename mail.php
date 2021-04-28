<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

 $to = "asharkhan38@gmail.com";
 $subject = "Mail from portfolio";
 $txt ="Name = " . $name . "\r\n Email = " . $email . . "\r\n Subject = " . $subject . . "\r\n Message = " . $message;
 $hearders = "From: noreply@yoursite.com" ;
 if($email!=NULL){
   mail($to,$subject,$txt,$headers);
 }
 ?>
