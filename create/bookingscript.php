<body>
    <h1>New Booking Created</h1>
</body>


<?php
  include("../config.php");
try {
	$statement = $conn->prepare("INSERT INTO Booking (pet_id, clinic_id, bookingType, time, date)
								VALUES(:pet_id, :clinic_id, :bookingType, :time, :date)");
														
	$statement->execute(array(
	"pet_id" => $_POST['pet_id'],
    "clinic_id" => $_POST['clinic_id'],
    "bookingType" => $_POST['bookingType'],
	"time" => $_POST['time'],
	"date" => $_POST['date']
));
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

