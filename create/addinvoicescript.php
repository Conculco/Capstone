<?php
include("../config.php");
try {
    $statement = $conn->prepare("INSERT INTO Orders (invoice_id, treatment_id )
								VALUES(:invoice_id, :treatment_id)");

    $statement->execute(array(
        "invoice_id" => $_POST['invoice_id'],
        "treatment_id" => $_POST['treatment_id'],
    ));
    $id = $_POST['customer_id'];
    header("Location: ../customer.php?id=$id");
    die();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
