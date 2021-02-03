<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$rating = $_POST['rating'];


		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into userdb (user_id,username,email,phone,password,rating) values ('$user_id','$username','$email','$phone','$password','$rating')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webs| SignUp</title>
    <link rel="icon" href="ab.png" type="image/png">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   


	<style>

*{
    margin: o;
    padding: o;
}
body{
    background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(admin_login.jpg);
    background-position: center;
    background-size: cover;
   
}
form{
    height: auto;
    width: 60%;
	background-color: #078f9434;
    font-size: 40px;
    margin-bottom: 30px;
    border-radius: 10%;

}
h2 {
	font-size:40px;
	color:#fff;
}
input{
	padding:10px; 
	border-radius:10px;
}
#opt{
	padding-bottom:10%;
}
#opt a{
	color: #dfee14a6;
	text-decoration:none;
	border:1px solid white;
	border-radius:10%;
	background:#078f9434;
	cursor:pointer;

}
#opt a:hover{
	background:pink;
	color:black;
}
#btn{
	float:right;
	padding:px;
	margin-right:17%;
	
}
#btn :hover{
	color:purple;
}


@media(max-width:660px){

	body{
    background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(os.jpg);
    background-position: center;
    background-size: cover;
	}
    form{
		padding-top:5%;
        height: 50%;
        width: 70%;
        background-color: #ba9be234;
        font-size:20px;
        margin-bottom: 30px;
        border-radius: 10%;
	}
	h2 {
	font-size:3	0px;
	color:#fff;
}
}


	</style>


</head>
<body>
    
    
<center>
    <h2 >SignUp</h2>
    
    
    <form method="post" >
        <p>
            <label for="username">Username<sup></label>
            <input type="text" name="username" placeholder="create username" required>
        </p>
        <p>
            <label for="email">Email <span style="padding:5.4%"></span>    </label>
            <input type="email" name="email" placeholder="jonwaithira@gmail.com" required>
        </p>
        
        <p>
            <label for="phone">Phone <span style="padding:4.9%"></label>
            <input type="tel" name="phone" placeholder="+254726354504" required>
		</p>
        
		<p>
			<label for="password">Password <span style="padding:1%"></label>
            <input type="password" name="password" placeholder="create password" required>
        </p>


 
		<span style="padding:5%;"></span> <input id="btn"  type="submit" value="Sign Up">
        <input  id="btn"type="reset" value="Cancel">
        
        <P id="opt" > Already a member? <a href="login.php" ><b>Login</b></a></P>
>
        
    </form>
    
    </center>

</body>