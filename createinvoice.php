<!DOCTYPE html>
<?php
session_start();
include("./configsqli.php");
?>
<html>

<head>
    <title>Lovely Pets</title>
    <link rel="icon" href="img/favicon.ico"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<?php
include 'header.php';
?>

<?php
$id = $_GET['id'];
?>
<div class="center">
    <form action="create/invoicescript.php" method="post">

        <input name="clinic_id" type="hidden" value="1">
        <input name="customer_id" type="hidden" value="<?php echo $_GET['id']?>">
        <input name="date" type="hidden" placeholder="date">
        <input name="paid" type="hidden" value="0">

        <label>Pet Name</label>
        <select name="pet_id">
        <?php
        $sql = "SELECT * FROM Pet WHERE customer_id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $petname = $row["petname"];
                $pet_id = $row["pet_id"];
                echo "<option value=\"$pet_id\">$petname</option>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </select>
        <input type="submit" value="Create Invoice">
    </form>
</div>
<div class="whitespace"> </div>
<?php
include 'footer.php';
?>
</body>

</html>
