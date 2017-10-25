<?php
include("../config.php");
try {
    $statement = $conn->prepare("INSERT INTO Booking(pet_id, clinic_id, bookingType, date, timeSlot)
								VALUES(:pet_id, :clinic_id, :bookingType, :date, :timeSlot)");

    $statement->execute(array(
        "pet_id" => $_POST['pet_id'],
        "clinic_id" => $_POST['clinic_id'],
        "bookingType" => $_POST['bookingType'],
        "date" => $_POST['date'],
        "timeSlot" => $_POST['timeSlot'],
    ));
    $date = $_POST['date'];
    $pet_id = $_POST['pet_id'];
    $bookingType = $_POST['bookingType'];
    $timeSlot = $_POST['timeSlot'];
    header("Location: ../bookingconfirm.php?date=$date&pet_id=$pet_id&bookingType=$bookingType&timeSlot=$timeSlot");
    die();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
