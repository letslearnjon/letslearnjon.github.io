
<?php 
session_start();

	include("submit.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		


		if(!empty($username) && !empty($password))
		{

	
			
			$query = "insert into contact (username,email,password) values ($username','$email','$password')";

			mysqli_query($con, $query);

			die;
		}
		else
		{
			echo "Please enter some valid information!";
		}
	}
?>







<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>


<form method="post">

	<input type="text" name="username" placeholder="name"><br/>
	<input type="email" name="email" placeholder="name"><br/>
	<input type="password" name="password" placeholder="name"><br/>
	<input type="submit" value="Submit"  placeholder="name"><br/>
	<input type="reset" value="Reset" placeholder="name">

	
</form>


</body>
</html>