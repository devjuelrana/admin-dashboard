<?php 

	session_start();

	if(!isset($_SESSION['success'])){

		header('location: index.php');
	}



 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<h2>Welcome to admin panel </h2>


	<br>

	<a href="logout.php">Logout</a>

</body>
</html>