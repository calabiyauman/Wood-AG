<?php

    require '/PHPMailerAutoload.php';

    if(isset($_POST['email']))
      (isset($_POST['phone']))
      (isset($_POST['name']))
      (isset($_POST['message']))

    {


    $name          = $_POST['name'];

    $phone         = $_POST['phone'];
    $visitor_email = $_POST['email'];
    $content       = $_POST['message'];



     if($visitor_email =="") {  //dont send email go back
            
              echo ("UNSUCCESSFUL:Please Enter Your Email");
          
          
              
             } else {    //try sending email


  
 $subject = "FROM Company";
 $bodytext .= $name . "<br>" . $phone . "<br>" . $visitor_email . "<br>" .  $content;
  


    $mail = new PHPMailer();
    $mail->IsHTML(true);
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
  
    $mail->Host = "a2plcpnl0116.prod.iad2.secureserver.net"; 
    $mail->SMTPAuth = true;   
    $mail->Username = "admin@woodlandagriculture.com"; 
    $mail->Password = "fearmenot2!";
    $mail->port = 25;


$mail->addReplyTo($visitor_email);
$mail->setFrom('admin@woodlandagriculture.com');



$mail->addAddress('carnahandouglas@gmail.com');
$mail->Subject = $subject;
$mail->Body = $bodytext;


  
  
    
  
              if($mail->Send()) {
              echo ("You message was sent SUCCESSFULLY");
              
             } else {
              echo ("Technical Problems:Your message was not sent");
             }

}
}
?>