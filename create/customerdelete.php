  <?php
  include("../config.php");
  try {
    $sql = "DELETE FROM Customer & Pet & Booking
            WHERE customer_id = :id";

  	$statement = $conn->prepare($sql);
  	$statement->execute(array(
              "id" => $_POST['id']
      ));

      header("Location: ../searchcustomer.php");
  }
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
  ?>
