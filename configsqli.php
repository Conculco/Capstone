<?php
	$servername = "lovelypetsdbinstance.cqs865i0h9cb.ap-southeast-2.rds.amazonaws.com:3306";
	$username = "sa";
	$password = "Password01!";
	$dbname = "LovelyPetsDB";
	
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>