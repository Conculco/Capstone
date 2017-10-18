
<?php
include("../config.php");
try {
    $statement = $conn->prepare("INSERT INTO Staff (clinic_id, firstname, lastname, dob, username, password, phoneNumber, address, city, postCode, email, access)
								VALUES(:clinic_id, :firstname, :lastname, :dob, :username, :password, :phoneNumber, :address, :city, :postCode, :email, :access)");

    $statement->execute(array(
        "clinic_id" => $_POST['clinic_id'],
        "firstname" => $_POST['firstname'],
        "lastname" => $_POST['lastname'],
        "dob" => $_POST['dob'],
        "username" => $_POST['username'],
        "password" => crypt($_POST["password"], $_POST["password"]),
        "phoneNumber" => $_POST['phoneNumber'],
        "address" => $_POST['address'],
        "city" => $_POST['city'],
        "postCode" => $_POST['postCode'],
        "email" => $_POST['email'],
        "access" => $_POST['access']
    ));
    $id = $_POST['customer_id'];
    header("Location: ../index.php");
    die();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>