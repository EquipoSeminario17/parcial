<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "parcialF";

	// Create connection
	$conexion = new mysqli($servername, $username, $password,$database);
	if($conexion->connect_error) {
	die("Connection failed: " . $conn->connect_error);
    }
    
?>