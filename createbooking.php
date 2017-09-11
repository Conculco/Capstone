<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovey Pets</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Minified JS library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Minified Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<?php
    include 'header.php';
?>
    <div class="center">
        <form method="post" action="">
            <label>pet_id</label>
            <input id="pet_id" type="text" value="<?php echo $_GET['pet_id'];?>">

			      <label>clinic_id</label>
            <input id="clinic_id" type="text" value="1">

            <label>Booking Type</label>
            <input id ="bookingType" type="text" name="booking_type" class="form-control">

            <label>Date Time</label>
            <input size="16" type="text" name="event_datetime" class="form-control" id="dateTime" readonly>

            <input id="submit" type='button' onclick="bookingFunction()" value="Create Booking">
        </form>
</div>

<script src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
$(function () {
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes();
    var dateTime = date+' '+time;
$("#dateTime").datetimepicker({
        format: 'yyyy-mm-dd hh:ii'
      });
    });
</script>

<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
