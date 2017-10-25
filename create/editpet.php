<?php
include("../config.php");
  try {
      $sql = "UPDATE Pet
              SET petname = :petname, dob = :dob, sex = :sex, species = :species, breed = :breed, description = :description, microchip_id = :microchip_id
              WHERE pet_id = :pet_id";
      $statement = $conn->prepare($sql);
      $statement->execute(array(
              "petname" => $_POST['petname'],
              "dob" => $_POST['dob'],
              "sex" => $_POST['sex'],
              "species" => $_POST['species'],
              "breed" => $_POST['breed'],
              "description" => $_POST['description'],
              "species" => $_POST['species'],
              "microchip_id" => $_POST['microchip_id'],
              "pet_id" => $_POST['pet_id']
        ));

      $customer_id = $_POST['customer_id'];
      header("Location: ../customer.php?id=$customer_id");
      die();
  }
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
?>
