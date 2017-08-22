<body>
    <h1>New Customer Created</h1>
</body>


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
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

