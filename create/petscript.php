<body>
    <h1>New Pet Created</h1>
</body>


<?php
  include("../config.php");
try {
	$statement = $conn->prepare("INSERT INTO Pet (customer_id, treatment_id, petname, dob, sex, species, breed, description, microchip_id)
								VALUES(:customer_id, :treatment_id, :petname, :dob, :sex, :species, :breed, :description, :microchip_id)");
														
	$statement->execute(array(
	"customer_id" => $_POST['customer_id'],
    "treatment_id" => $_POST['treatment_id'],
    "petname" => $_POST['petname'],
	"dob" => $_POST['dob'],
	"sex" => $_POST['sex'],
	"species" => $_POST['species'],
	"breed" => $_POST['breed'],
	"description" => $_POST['description'],
    "microchip_id" => $_POST['microchip_id']
));
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

