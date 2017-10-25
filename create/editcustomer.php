<?php
include("../config.php");
  try {
      $sql = "UPDATE Customer
              SET emergencyContact = :emergencyContact, firstname = :firstname, lastname = :lastname, address = :address, email = :email
              WHERE customer_id = :id";
      $statement = $conn->prepare($sql);
      $statement->execute(array(
              "emergencyContact" => $_POST['emergencyContact'],
              "firstname" => $_POST['firstname'],
              "lastname" => $_POST['lastname'],
              "address" => $_POST['address'],
              "email" => $_POST['email'],
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
