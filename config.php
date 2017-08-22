<?php
$dbservername = "localhost";
$dbusername = "phpmyadmin";
$dbpassword = "Capstone42";
$dbname = "LovelyPetsDB";

$conn = new PDO("mysql:host=$dbservername;dbname=$dbname", $dbusername, $dbpassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>