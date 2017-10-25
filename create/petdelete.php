<?php
include("../config.php");
try {
  $sql = "DELETE FROM Pet
          WHERE pet_id = :pet_id";

  $statement = $conn->prepare($sql);
  $statement->execute(array(
            "pet_id" => $_POST['pet_id']
    ));
    $customer_id = $_POST['customer_id'];
    header("Location: ../customer.php?id=$customer_id");
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
