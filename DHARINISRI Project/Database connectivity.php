<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "login form";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
	echo "not connected";
}

$username = $_POST['username'];
$password = $_POST['password']; 

$sql = "INSERT INTO `login`(`username`, `password`) VALUES ('$username','$password')";

$result = mysqli_query($con , $sql);

if($result)
{
	echo "data submitted";
}

else
{
	echo "query failed.....!";
}
 
?>