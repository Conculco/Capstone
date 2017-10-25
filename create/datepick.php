<?php
$pet_id=$_POST['pet_id'];
$date=$_POST['date'];
echo $pet_id;
header("Location: ../createbooking.php?pet_id=$pet_id&date=$date");
die();
?>
