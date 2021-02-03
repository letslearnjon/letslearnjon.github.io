
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "websvillage";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))

{


	die("Failed to connect please try and check any error");
}

?>