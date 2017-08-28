<?php
session_start();
include("./config.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovey Pets</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<?php
    include 'header.php';
?>

<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Firstname</th><th>Lastname</th><th>Contact Number</th><th>Address</th><th>Email</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}
try {
    $id = $_GET["id"];
    $stmt = $conn->prepare("SELECT  `firstname`, `lastname`, `emergencyContact`, `address`, `email` FROM Customer Where customer_id = $id");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
echo "</table>";

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Pet Name</th><th>Date of Birth</th><th>Sex</th><th>Species</th><th>Breed</th><th>Description</th><th>Microchip ID</th></tr>";

try {
    $id = $_GET["id"];
    $stmt = $conn->prepare("SELECT petname, dob, sex, species, breed, description, microchip_id FROM Pet Where customer_id = $id");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
echo "</table>";
?>



<?php
    include 'footer.php';
?>
</body>

</html>
