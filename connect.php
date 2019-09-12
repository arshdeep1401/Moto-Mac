<?php

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$mobile = filter_input(INPUT_POST, 'mobile');
$city = filter_input(INPUT_POST, 'city');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "motomac";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO registration (firstName,lastName,mobile,city,email,password)
values ('$firstName','$lastName','$mobile','$city','$email','$password')";
if ($conn->query($sql)){
	
	header( "Location:thankyou.html");
	
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}




?>