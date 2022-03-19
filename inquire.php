<?php

  $sent = false;
  if(isset($_POST['email']) && $_POST['email'] !='') {

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phonenum'];
      $web = $_POST['website'];
      $mobile = $_POST['mobile'];
      $message = $_POST['description'];


      $to = "develop@enterfacellc.com, dotenterface@gmail.com";
      $subject = "New Client Inquiry";
      $body = "";

      $body .= "From: ".$email. "\r\n";
      $message .= "\r\n";
      $message .= "Listed Name: ".$name. "\r\n";
      $message .= "Listed Telephone: ".$phone. "\r\n";
      $message .= "Project Web? ".$web. "\r\n";
      $message .= "Project Mobile? ".$mobile. "\r\n";
  
      mail($to, $body, $subject, $message, $phone);

      $sent = true;
      $redirectPg = 'http://enterfacellc.com';
      $redirect = true;

      if ($sent==true) {
        header('Location: '.$redirectPg);
      }

    }

  }
  else header('Location: http://enterfacellc.com/');

?>