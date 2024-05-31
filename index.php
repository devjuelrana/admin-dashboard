<?php 


	session_start();

	if(isset($_SESSION['success'])){

		header('location: admin.php');
	}


	if(isset($_POST['login'])){


		define('EMAIL','admin@gmail.com');
		define('PASSWORD','123');

		$email = $_POST['email'];
		$password = $_POST['password'];

		if($email == EMAIL && $password == PASSWORD){

			$_SESSION['success'] = '';

			header('location: admin.php');
		}else {
			$fail = "password dose not match";
		}

		

}



?> 





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log in to the admin panel</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<form action="" method="POST">
		<input type="email" name="email" placeholder="email" required>	
		<input type="password" name="password" placeholder="password" required>

		<input type="submit" name="login" value="login" >
	</form>

	<p>
		<?php 

			if(isset($fail)){
				echo $fail;
			}

		 ?>
	</p>

</body>
</html>