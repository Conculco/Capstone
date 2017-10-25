<?php
include("../config.php");
try {
	$statement = $conn->prepare("INSERT INTO Customer (emergencyContact, firstname, lastname, address, email)
								VALUES(:emergencyContact, :firstname, :lastname, :address, :email)");

	$statement->execute(array(
	    "emergencyContact" => $_POST['emergencyContact'],
        "firstname" => $_POST['firstname'],
        "lastname" => $_POST['lastname'],
	    "address" => $_POST['address'],
        "email" => $_POST['email']
    ));

    header("Location: ../index.php");
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>