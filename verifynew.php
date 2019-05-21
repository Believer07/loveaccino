<?php

	if(isset($_POST['sendotp']))
  {
      $number = $_POST['Mobile'];
			echo "AAYA";
	    $username = "harshhingorani7@gmail.com";
	    $hash = "1adb410da17bf096b8a46594a12d026246dbf2c6380d0312f6a6744ba09755f9";


    	$test = true;


    	$sender = "TXTLCL"; // This is who the message appears to be from.
    	$numbers = "$number";
			setcookie('otp', $otp);
      $otp = mt_rand(1000, 9999);
    	$message = "Hello. This is your OTP:- " . $otp;
    	// 612 chars or less
    	// A single number or a comma-seperated list of numbers
    	$message = urlencode($message);
    	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers;/*."&test=".$test;*/
    	$ch = curl_init('http://api.textlocal.in/send/?');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$result = curl_exec($ch); // This is the result from the API
			curl_close($ch);

				if(isset($_POST['resendotp']))
				{
					$message = "Hello. This is your OTP:- " . $otp;
					$message = urlencode($message);
					$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers;/*."&test=".$test;*/
					$ch = curl_init('http://api.textlocal.in/send/?');
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$result = curl_exec($ch); // This is the result from the API
					curl_close($ch);
				}
    }

		if(isset($_POST['verifyotp']))
		{
			$otp = $_POST['otp'];
			if($_COOKIE['otp'] == $otp);
			{
			echo "congratulations, Your mobile is verified.";
		  }
			else
			{
				echo "please enter correct otp.";
			}
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>

		<form action=" " method="post">
			Mobile: <input type="text" name="Mobile" placeholder="Enter Mobile Number">
			<br/>
			<br/>
			<button type="submit" name="sendotp" style="font: bold 14px Arial;">Send OTP</button>
			<br/>
			<br/>
		</form>

		<form action=" " method="post">
			OTP: <input type="text" name="otp" placeholder="verify OTP">
			<br/>
 			<button type="submit" name="verifyotp" style="font: bold 14px Arial;">Verify OTP</button>
 		</form>
        <br/>
 		<form action=" " method="post">
 		<button type="submit" name="resendotp" style="font: bold 14px Arial;">Resend OTP</button>
 		</form>



 	</body>
</html>
