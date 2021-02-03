<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "joncontact";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){

	die("Could not connect to database");
}

else{
	echo "Connected successfully";
}


?>