<?php

  $email = $_GET['email'] ;
  $message = $_GET['message'] ;

  // here we use the php mail function
  // to send an email to:
  // you@example.com
  mail( "samarthsikotara@gmail.com", "Feedback Form Results",$message, "From: $email" );
?>

