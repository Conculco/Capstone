<?php
session_start();
$date = $_GET['date'];
$timeSlot = $_GET['timeSlot'];
?>
<?php
include 'configsqli.php';
include 'header.php';
$bookingTypeArray = array(
  '',
  'General Checkup',
  'Vacinations',
  'Desex',
  'Microchip',
  'Other');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovely Pets</title>
    <link rel="icon" href="img/favicon.ico"/>
    <link rel="icon" href="img/favicon.ico"/>
    <!-- Minified JS library -->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="js/main.js">
        $(document).ready(function () {
          $('#date').change(function() {
            var selectedValue = $(this).val();
            $('#divResult').html(selectedValue);
          });
        });
      </script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
  <div class="whitespace"> </div>
    <div class="center">
      <p><b>Customer Name</b>: <?php   $sql = "SELECT t1.firstname, t1.lastname FROM Customer as t1 LEFT JOIN Pet as t2 ON t1.customer_id = t2.customer_id LEFT JOIN Booking as t3 ON t2.pet_id = t3.pet_id WHERE t3.timeSlot = $timeSlot AND t3.date = '$date'";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo $row["firstname"];
        echo " ";
        echo $row["lastname"];
      }?>

      <p><b>Pet Name</b>: <?php   $sql = "SELECT t1.petname FROM Pet as t1 LEFT JOIN Booking as t2 ON t2.pet_id = t1.pet_id WHERE t2.timeSlot = $timeSlot AND t2.date = '$date'";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo $row["petname"];
      }?>

      <p><b>Booking Type</b>: <?php   $sql = "SELECT bookingType FROM Booking WHERE timeSlot = $timeSlot AND date = '$date'";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
        $arrayval = $row["bookingType"];
        echo $bookingTypeArray[$arrayval];
      }?>

</div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
