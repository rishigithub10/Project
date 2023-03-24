<?php 
    $result = "";
    $error  = "";
  if(isset($_POST['submit']))
  {
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "vijaydeveloperspune@gmail.com"; // Your mail
    $mail->Password = 'rheslllhpmxpxfpd'; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('vijaydeveloperspune@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='ANSHRAJ ICON Project By Vijay Developers:' .$_POST['subject'];
    
   $mail->Body=' Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Phone: '.$_POST['phone'].'<br>Comments: '.$_POST['company'].'<br>Project: '.$_POST['project'].'';
    if(!$mail->send())
    {
      $error = "Something went worng. Please try again.";
    }
    else 
    {
      //$result="Thanks\t" .$_POST['name']. " for contacting us.";//
      mail($address, $e_subject, $msg, $headers );
      header('Location: ../image/ANSHRAJICON-BROCHURE.pdf');
    }
  }
  
?>
