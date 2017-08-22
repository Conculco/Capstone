<?php
$dbservername = "lovelypetsdbinstance.cqs865i0h9cb.ap-southeast-2.rds.amazonaws.com:3306";
$dbusername = "phpmyadmin";
$dbpassword = "Capstone42";
$dbname = "LovelyPetsDB";

$conn = new PDO("mysql:host=$dbservername;dbname=$dbname", $dbusername, $dbpassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>