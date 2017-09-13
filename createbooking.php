<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovey Pets</title>
    <!-- Minified JS library -->
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
    include 'header.php';
?>
<script>

  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

    <div class="center">
        <form action="create/createbooking.php" method="post">
            <input name="pet_id" type="hidden" value="<?php echo $_GET['pet_id'];?>">
            <input name="clinic_id" type="hidden" value="1">
            <label>Booking Type</label>
              <select id="bookingType" name="bookingType">
                <option value="0">--Select Booking Type--</option>
                <option value="1">General Checkup</option>
                <option value="2">Vacinations</option>
                <option value="3">Desex</option>
                <option value="4">Microchip</option>
                <option value="5">Other</option>
              </select>
            <label>Date</label>
            <input type="text" name="datepicker" id="datepicker" readonly>
            <lebel>Time Slot</label>
              <select id="timeSlot" name="timeSlot">
                <option value="0">--Select Time Slot--</option>
                <option value="1">9:00 - 9:30</option>
                <option value="2">9:30 - 10:00</option>
                <option value="3">10:00 - 10:30</option>
                <option value="4">10:30 - 11:00</option>
                <option value="5">11:00 - 11:30</option>
                <option value="6">11:30 - 12:00</option>
                <option value="7">12:00 - 12:30</option>
                <option value="8">12:30 - 13:00</option>
                <option value="9">13:00 - 10:30</option>
                <option value="10">13:30 - 14:00</option>
                <option value="11">14:00 - 14:30</option>
                <option value="12">14:30 - 15:00</option>
                <option value="13">15:00 - 15:30</option>
                <option value="14">15:30 - 16:00</option>
                <option value="15">16:00 - 16:30</option>
                <option value="16">16:30 - 17:00</option>
              </select>

            <input type='submit' value="Create Booking">
        </form>
</div>

<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
