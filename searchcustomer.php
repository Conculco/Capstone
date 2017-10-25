<?php
session_start();
include("./configsqli.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovely Pets</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="img/favicon.ico"/>
</head>

<body>
<?php
    include 'header.php';
?>
<div class="whitespace"> </div>
    <div class="center">
        <form action="./searchcustomer.php" method="post">
            <label>Find Customer</label>
            <input name="searchinput" type="text" required placeholder="Enter Customer Name...">
            <input type="submit" value="Search">
        </form>
    </div>
    <div class="whitespace"> </div>
    <?php
    $sql = "SELECT * FROM Customer";
    if(isset($_POST['searchinput'])){
        $search = $_POST['searchinput'];
        $sql = "SELECT * FROM Customer WHERE firstname LIKE '%$search%'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<form action='' method='post'>";
        echo "<table style=\"width:60%\" class=\"table\" align=\"center\">";
        echo "<tr><th>Contact Number</th><th>Firstname</th><th>Lastname</th><th>Address</th><th>Email</th><th>Select</th><th>Edit</th></tr>";
        while($row = $result->fetch_assoc()) {
            $url = $row["customer_id"];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $address = $row['address'];
            $email = $row['email'];
            $emergencyContact = $row['emergencyContact'];
            echo "<tr>" .
                "<td>" . $row["emergencyContact"] . "</td>" .
                "<td>" . $row["firstname"] . "</td>".
                "<td>" . $row["lastname"] . "</td>".
                "<td>" . $row["address"] . "</td>".
                "<td>" . $row["email"] . "</td>".
                "<td>" . "<button type=\"submit\" formaction=\"customer.php?id=$url\">Select</button>" . "</td>".
                "<td>" . "<button type=\"submit\" formaction=\"customeredit.php?id=$url&emergencyContact=$emergencyContact&firstname=$firstname&lastname=$lastname&address=$address&email=$email\">Edit Details</button>" . "</td>".
                "</tr>";
        }
        echo "</form>";
    } else {
        echo "0 results";
    }
    echo "</table>";
    ?>
    <div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
