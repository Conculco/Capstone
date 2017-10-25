<?php
$date=$_POST['date'];
echo $pet_id;
header("Location: ../calendar2.php?date=$date");
die();
?>
