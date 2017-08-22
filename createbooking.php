<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovey Pets2</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<?php
    include 'header.php';
?>
    <div class="center">
        <form action="create/bookingscript.php" method="post">
			<label>pet_id</label>
            <input name="pet_id" type="text" placeholder="pet_id">
			
			<label>clinic_id</label>
            <input name="clinic_id" type="text" placeholder="clinic_id">
		
            <label>bookingType</label>
            <input name="bookingType" type="text" placeholder="bookingType">
			
			<label>time</label>
            <input name="time" type="text" placeholder="time">
			
			<label>date</label>
            <input name="date" type="text" placeholder="2017-08-02">

            <input type="submit" value="Create Staff">
        </form>
    </div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
