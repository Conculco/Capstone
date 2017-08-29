<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovey Pets</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<?php
    include 'header.php';
?>
    <div class="center">
        <form id="form" name="form">
			      <label>pet_id</label>
            <input id="pet_id" type="text" value="<?php echo $_GET['pet_id'];?>">

			      <label>clinic_id</label>
            <input id="clinic_id" type="text" value="1">

            <label>bookingType</label>
            <input id="bookingType" type="text" placeholder="bookingType">

			      <label>time</label>
            <input id="time" type="text" placeholder="time">

			      <label>date</label>
            <input id="date" type="text" placeholder="2017-08-02">

            <input id="submit" type='button' onclick="bookingFunction()" value="Create Booking">
        </form>
    </div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
