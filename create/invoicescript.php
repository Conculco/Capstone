<?php
include("../config.php");
try {
    $statement = $conn->prepare("INSERT INTO Invoice (clinic_id, customer_id, pet_id, date, paid)
								VALUES(:clinic_id, :customer_id, :pet_id, :date, :paid)");

    $statement->execute(array(
        "clinic_id" => $_POST['clinic_id'],
        "customer_id" => $_POST['customer_id'],
        "pet_id" => $_POST['pet_id'],
        "date" => $_POST['date'],
        "paid" => $_POST['paid'],
    ));
    $id = $_POST['customer_id'];
    header("Location: ../customer.php?id=$id");
    die();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
