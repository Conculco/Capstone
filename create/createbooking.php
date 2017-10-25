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
    $id = $_POST['pet_id'];
    $date = $_POST['date'];
    header("Location: ../calendar2.php?date=$date");
    die();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
