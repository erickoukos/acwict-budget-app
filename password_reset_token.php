<?php
if(isset($_POST['password-reset-token']) && $_POST['email'])
{
  include('config/connect.php');
     
    $emailId = $_POST['email'];
 
    $result = mysqli_query($connection,"SELECT * FROM users WHERE email='" . $emailId . "'");
 
    $row= mysqli_fetch_array($result);
 
  if($row)
  {
     
     $token = md5($emailId).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
    $update = mysqli_query($connection,"UPDATE users set  password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");
 
    $link = "<a href='localhost/acwict-budget-app/reset_password.php?key=".$emailId."&token=".$token."'>Click To Reset password</a>";
 
    require_once('./lib/vendor/autoload.php');
 
    // Create the Transport
    $transport = (new Swift_SmtpTransport('mail.nncsevices.com', 465, 'ssl'))
    ->setUsername('no-reply@nncsevices.com')
    ->setPassword('(-IwIDYzk)Sl');
 
    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

/*
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "your_email_id@gmail.com";
    // GMAIL password
    $mail->Password = "your_gmail_password";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='your_gmail_id@gmail.com';
    $mail->FromName='your_name';
    $mail->AddAddress('reciever_email_id', 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
*/

 // Create a message
 $message = (new Swift_Message('Please Verify Email Address!'))
 ->setFrom([$email => $firstname . ' ' . $lastname])
 ->setTo($email)
 ->addPart($msg, "text/html")
 ->setBody('Click On This Link to Reset Password '.$link.'');


 $result = $mailer->send($message);
 if(!$result){
  $email_verify_err = '<div class="alert alert-danger">
          Verification email could not be sent!
  </div>';
} else {
  $email_verify_success = '<div class="alert alert-success">
      Verification email has been sent!
  </div>';
}
  }else{
    if(empty($email)){
      $emailEmptyErr = '<div class="alert alert-danger">
          Email can not be blank.
      </div>';
  }
  }
}
?>