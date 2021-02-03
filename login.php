<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
		

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from userdb where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.html");
						die;
					}
				}
			}
			
		echo "wrong username or password! or .<br> username is already taken";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webs| Login</title>
    <link rel="icon" href="ab.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
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
    width: 50%;
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
	padding:8px; 
	border-radius:10px;
	font-size:20px;
}
#btn{
	float:right;
	margin:0 17% 5px 0;
	font-size:20px;
}
#btn :hover{
	color:purple;
}
#last{
	padding-bottom:5%;
	font-size:45px;
	color:#fff;
}
#last a{
	border:1px solid black;
	color: #2be296e0; 
	text-decoration:none;
	border-radius:10%;
	background:  #2b90e22f;  
}
@media(max-width:660px){

	body{
    background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(os.jpg);
    background-position: center;
    background-size: cover;
	}
    form{
        height: auto;
        width: 80%;
        background-color: rgb(102, 80, 100);
        font-size:20px;
        margin-bottom: 30px;
        border-radius: 10%;
	}
	

}
h2 {
	font-size:30px;
	color:#fff;
}
input{
	padding:5px; 
	border-radius:10px;
	font-size:15px;
}
#btn{
	float:right;
	margin:0 14% 5px 0;
	font-size:15px;
	color:green;
	font-weight:bold;
}
#btn :hover{
	color:purple;
}
#last{
	padding-bottom:5%;
	font-size:18px;
}
}


	</style>


</head>
<body>
    
    
<center>
    <h2 >Login Here</h2>
    
    <form method="post" >
        <p>
            <label for="username">Username<sup></label>
            <input type="text" name="username"  required>
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </p>
 
        <input  id="btn"type="submit" value="Login">
		<input id="btn" type="reset" value="Cancel"> <br>
	
		
        <P id="last">Not a member? <a href="signup.php">Sign Up</a></P>
    </form>
    
    </center>

</body>
</html>