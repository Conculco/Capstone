<?php
include("../config.php");
try {
  $sql = "DELETE FROM Booking
          WHERE timeSlot = :timeSlot";

  $statement = $conn->prepare($sql);
  $statement->execute(array(
            "timeSlot" => $_POST['timeSlot'],
    ));
    echo "Record deleted successfully";
    $date = $_POST['date'];
    header("Location: ../calendar2.php?date=$date");
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
