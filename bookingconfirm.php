<?php
session_start();
$pet_id = $_GET['pet_id'];
$bookingType = $_GET['bookingType'];
$timeSlot = $_GET['timeSlot'];

?>
<?php
include 'configsqli.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovely Pets</title>
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

<?php
    include 'header.php';
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
    $bookingTypeArray = array(
      '',
      'General Checkup',
      'Vacinations',
      'Desex',
      'Microchip',
      'Other');
?>

  <div class="whitespace"> </div>
    <div class="center">
      <p><b>Customer Name</b>: <?php   $sql = "SELECT t1.firstname, t1.lastname FROM Customer as t1 LEFT JOIN Pet as t2 ON t1.customer_id = t2.customer_id LEFT JOIN Booking as t3 ON t2.pet_id = t3.pet_id = 7 WHERE t2.pet_id = 7";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo $row["firstname"];
        echo " ";
        echo $row["lastname"]."<br>";
      }?>
      </p>

      <p><b>Pet Name</b>:
      <?php   $sql = "SELECT petname FROM Pet Where pet_id = $pet_id";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo $row["petname"]."<br>";
      }?>
      </p>

      <p><b>Pet Type</b>: <?php   $sql = "SELECT species FROM Pet Where pet_id = $pet_id";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo $row["species"]."<br>";
      }?>
      </p>

      <p><b>Booking Type</b>: <?php echo $bookingTypeArray[$_GET['bookingType']]?></p>

      <p><b>Booking Time</b>: <?php echo $_GET['date']?> <?php echo ", <b>Time Slot</b>: " ?><?php echo $timeslotarray[$_GET['timeSlot']]?></p>


      <p>A confirmation email has been sent to <b><?php   $sql = "SELECT t1.email FROM Customer as t1 LEFT JOIN Pet as t2 ON t1.customer_id = t2.customer_id LEFT JOIN Booking as t3 ON t2.pet_id = t3.pet_id = 7 WHERE t2.pet_id = 7";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo $row["email"];
      }?></b></p>
      <?php
      ?>

</div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
