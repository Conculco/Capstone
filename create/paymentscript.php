<?php
include("../config.php");
try {
    $paid = $_POST['paid'];
    $invoice_id = $_POST['invoice_id'];
    $statement = $conn->prepare("UPDATE Invoice SET paid=$paid WHERE invoice_id=$invoice_id");


    $statement->execute();
    $id = $_POST['customer_id'];
    header("Location: ../customer.php?id=$id");
    die();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
