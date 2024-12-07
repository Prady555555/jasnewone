<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $myAwardSpaceEmail = "info@avirtues.com";
    $myAwardSpaceEmailPassword = "Ammu@15121998";
    $myPersonalEmail = "info@avirtues.com";

    require 'PHPMailermaster/src/Exception.php';
    require 'PHPMailermaster/src/PHPMailer.php';
    require 'PHPMailermaster/src/SMTP.php';

    if(isset($_POST['submit'])) {

        $mail = new PHPMailer(true);
         
        $mail->SMTPDebug = 0;

        $mail->Host = 'mail.avirtues.com';
        $mail->SMTPAuth = true;
        $mail->Username = $myAwardSpaceEmail;
        $mail->Password = $myAwardSpaceEmailPassword;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->isSMTP();
        $mail->setFrom($myAwardSpaceEmail, 'Mailer');
        $mail->addAddress($myPersonalEmail);
        $mail->addReplyTo($_POST['email'], $_POST['name']);

        $mail->isHTML(true);    
        $mail->Subject = 'JAS Engineering Contact us';

        $message = "
  <html>
<head>
<title>JAS Engineering</title>
</head>
<body>
<h4>JAS Engineering  Contact us Details</h4>
<table style='border: 1px solid black;
  border-collapse: collapse;'>
<tr style='border: 1px solid black;'>
<th>Name :</th>
<td>".$_POST['name']."</td>
</tr>
<tr style='border: 1px solid black;'>
<th>Email :</th>
<td>".$_POST['email']."</td>
</tr>
<tr style='border: 1px solid black;'>
<th>Email :</th>
<td>".$_POST['mobile']."</td>
</tr>
<tr style='border: 1px solid black;'>
<th>Message:</th>
<td>".$_POST['message']."</td>
</tr>
</table>
</body>
</html>
";
        $mail->Body =  $message;

        try {
            $mail->send();
           // echo 'Your message was sent successfully!';
           echo "<script>
alert('Your message was sent successfully! Our Team will Contact Shortly');
window.location.href='index.php';
</script>";

        } catch (Exception $e) {
            echo "Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}";
        }
        
    } else {
        echo "There is a problem with the index.php document!";
    }
    
?>