<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "loveaccino";
try {
		 $conn = new PDO("mysql:host=".$servername.";port=3306;dbname=".$db_name, $username, $password);
		 // set the PDO error mode to exception
	 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo " Connection successfull ";
		}
catch(PDOException $e)
		{
		// echo "Connection failed: " . $e->getMessage();
	// echo "hii";
		}
 if($conn == null)
		{
		 return false;
		}
    ?>
