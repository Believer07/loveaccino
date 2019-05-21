<?php
session_start();
if(isset($_POST['login']))
{
	require 'dbconnection.php';
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(empty($email) || empty($password))
	{
		$message = 'All field are required';
		header('location:signup.php');
		exit();
	} 
	else
	{
		$stmt = $conn->prepare("SELECT email, password FROM user WHERE (email=? AND password=?) "); 
		$stmt->execute(array($email,$password));
		$row = $stmt->fetch(PDO::FETCH_BOTH);
		if($stmt->rowCount() == 1) 
		{
  			
  			header('location:index.php');
  			exit();
		}
		else 
		{
  			$message = "Emailaddress/Password is wrong";
  			echo " Emailaddress/Password is wrong ";
		}



	}
}
else
{
	header('location:signup.php');
	exit();
}
?>
