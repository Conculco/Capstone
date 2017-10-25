<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovey Pets</title>
<?php
include 'configsqli.php';
?>
<?php
    include 'header.php';
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="js/main.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<?php
include 'configsqli.php';
?>
    <?php
    $rows = array();

    $today = $_GET['date'];
    $date = $_GET['date'];
    echo $date;


    echo "<table style=width:10% border=1>";
    echo "<tr><td><b>";
    echo date("l");
    echo "<b></td></tr>";

    $sql = "SELECT * FROM Booking WHERE Booking.date = '$today'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo $row["timeSlot"];
            array_push($rows, $row["timeSlot"]);
        }
    }
    $timeslotarray = array(
        '9:00 - 9:30'
    , '9:30 - 10:00'
    , '10:00 - 10:30'
    , '10:30 - 11:00'
    , '11:00 - 11:30'
    , '11:30 - 12:00'
    , '12:00 - 12:30'
    , '12:30 - 13:00'
    , '13:00 - 13:30'
    , '13:30 - 14:00'
    , '14:00 - 14:30'
    , '14:30 - 15:00'
    , '15:00 - 15:30'
    , '15:30 - 16:00'
    , '16:00 - 16:30'
    , '16:30 - 17:00');

    for ($i = 0; $i<15; $i++) {
        echo "<tr>";
        if (in_array($i, $rows)) {
            echo "<td class='booked'>$timeslotarray[$i]</td>";
        } else {
            echo "<td class='notbooked'>$timeslotarray[$i]</td>";
        }
        echo "</tr>";
    }
?>

</body>
</html>
