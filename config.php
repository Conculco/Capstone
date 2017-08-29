<?php
	$servername = "lovelypetsdbinstance.cqs865i0h9cb.ap-southeast-2.rds.amazonaws.com:3306";
	$username = "sa";
	$password = "Password01!";
	$dbname = "LovelyPetsDB";
	
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>