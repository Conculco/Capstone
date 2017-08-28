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
echo "<tr><th>Id</th><th>Contact Number</th><th>Firstname</th><th>Lastname</th><th>Address</th><th>Email</th></tr>";

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
    $stmt = $conn->prepare("SELECT * FROM Customer");
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
