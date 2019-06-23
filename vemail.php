<?php
include 'dbconnection.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$error = NULL;
if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $token = md5($email);
  $sql = "insert into account(email,token) values(?,?) ";
  $stmt = $conn->prepare($sql);
  $true = $stmt->execute(array($email,$token));
  $url = "http://".$domain."/xxx.php/?token=$token";

  if ($true)
  {
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;


    require 'vendor/autoload.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer();

    try {
        //Server settings
        $mail->SMTPDebug = 1;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'loveaccino.marketing@gmail.com';                     // SMTP username
        $mail->Password   = 'asdfghjkl@12345';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('loveaccino.marketing@gmail.com', 'Loveaccino');
        $mail->addAddress($email, 'User'); //in place of 'user' , we will put name of the user

        $Body = '<p>Ankh Dikhata Hai Baap Ko</p>';
        // echo $Body
        $mail->isHTML(true);


        $mail->Subject = 'M Hoon Khalnayak';
        $mail->Body    = $url;
        //$mail->AltBody = strip_tags($Body);

        $mail->Send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }
}

?>


<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <form method="POST" action="">
    <table border="0" align="center" cellpadding="10">
      <tr>
        <td align="right">Email Address:</td>
        <td><input type="Email" name="email" required/></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="SUBMIT" name="submit" value="submit" required/></td>
      </tr>
    </table>
  </form>
<center>
<?php
echo $error;
?>
</center>
</body>
</html>
