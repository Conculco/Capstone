<?php
include("../config.php");
  try {
      $sql = "UPDATE Customer
              SET firstname = :firstname, lastname = :lastname
              WHERE customer_id = :id";
      $statement = $conn->prepare($sql);
      $statement->execute(array(
              "firstname" => $_POST['firstname'],
              "lastname" => $_POST['lastname'],
              "id" => $_POST['id'],
        ));

      $id = $_POST['customer_id'];
      header("Location: ../searchcustomer.php");
      die();
  }
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
?>
