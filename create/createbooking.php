<?php
$pet_id2=$_POST['pet_id1'];
$clinic_id2=$_POST['clinic_id1'];
$bookingType2=$_POST['bookingType1'];
$time2=$_POST['time1'];
$date2=$_POST['date1'];

$connection = mysql_connect("lovelypetsdbinstance.cqs865i0h9cb.ap-southeast-2.rds.amazonaws.com:3306", "sa", "Password01!"); // Establishing Connection with Server..
$db = mysql_select_db("LovelyPetsDB", $connection); // Selecting Database
if (isset($_POST['pet_id1'])) {
$query = mysql_query("insert into Booking(pet_id, clinic_id, bookingType, time, date) values ('$pet_id2', '$clinic_id2', '$bookingType2','$time2','$date2')"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed
?>
