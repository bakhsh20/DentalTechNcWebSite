<?php 

if(isset($_POST["submit"])){
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];

  $mailTo = "danbak4458@icloud.com";
  $headers = "From: " .$email;
  $txt = "You have a received an email from ".$name.".\n\n".$comment;

  mail($mailTo, $txt, $headers);
  header("Location: index.php?mailsend");
}

