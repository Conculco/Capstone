<?php
$emergencyContact2=$_POST['emergencyContact1'];
$firstname2=$_POST['firstname1'];
$lastname2=$_POST['lastname1'];
$address2=$_POST['address1'];
$email2=$_POST['email1'];

$connection = mysql_connect("lovelypetsdbinstance.cqs865i0h9cb.ap-southeast-2.rds.amazonaws.com:3306", "sa", "Password01!"); // Establishing Connection with Server..
$db = mysql_select_db("LovelyPetsDB", $connection); // Selecting Database
if (isset($_POST['emergencyContact1'])) {
$query = mysql_query("insert into Customer(emergencyContact, firstname, lastname, address, email) values ('$emergencyContact2', '$firstname2', '$lastname2','$address2','$email2')"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed
?>
