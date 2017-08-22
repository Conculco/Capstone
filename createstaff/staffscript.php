<body>
    <h1>New Staff Member Created</h1>
</body>


<?php
  include("../config.php");
try {
	$statement = $conn->prepare("INSERT INTO Staff (clinic_id, firstname, lastname, dob, username, password, phoneNumber, address, city, postCode, email)
								VALUES(:clinic_id, :firstname, :lastname, :dob, :username, :password, :phoneNumber, :address, :city, :postCode, :email)");
														
	$statement->execute(array(
	"clinic_id" => $_POST['clinic_id'],
    "firstname" => $_POST['username'],
    "lastname" => $_POST['lastname'],
	"dob" => $_POST['dob'],
	"username" => $_POST['username'],
	"password" => crypt($_POST["password"], $_POST["password"]),
	"phoneNumber" => $_POST['phoneNumber'],
	"address" => $_POST['address'],
	"city" => $_POST['city'],
	"postCode" => $_POST['postCode'],
    "email" => $_POST['email']
));
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

