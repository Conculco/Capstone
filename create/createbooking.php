<?php
include("../config.php");
try {
    $statement = $conn->prepare("INSERT INTO Booking(pet_id, clinic_id, bookingType, dateTime)
								VALUES(:pet_id, :clinic_id, :bookingType, :dateTime)");

    $statement->execute(array(
        "pet_id" => $_POST['pet_id'],
        "clinic_id" => $_POST['clinic_id'],
        "bookingType" => $_POST['bookingType'],
        "dateTime" => $_POST['dateTime'],
    ));
    $id = $_POST['pet_id'];
    header("Location: ../createbooking.php?id=$id");
    die();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
