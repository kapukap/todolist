<?php 
	
$servername = "localhost";
	$username = "root";
	$pass = "";
	$dbName = "todolist";


$conn = new mysqli($servername, $username, $pass, $dbName);

	if ($conn -> connect_error != null) {
		die("Error");
    }
    
?>