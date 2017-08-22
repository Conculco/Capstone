<?php
session_start();
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
    <div class="center">
        <form action="create/petscript.php" method="post">
            <label>customer_id</label>
            <input name="customer_id" type="text" placeholder="customer_id">
			
			<label>Treatment</label>
            <input name="treatment_id" type="text" placeholder="treatment_id">

			<label>Pet Name</label>
            <input name="petname" type="text" placeholder="">
			
			<label>Date of Birth</label>
            <input name="dob" type="text" placeholder="">

			<label>Sex</label>
            <input name="sex" type="text" placeholder="Male/Female">
			
			<label>species</label>
            <input name="species" type="text" placeholder="species">
			
			<label>breed</label>
            <input name="breed" type="text" placeholder="breed">
			
			<label>description</label>
            <input name="description" type="text" placeholder="description">
			
			<label>microchip_id</label>
            <input name="microchip_id" type="text" placeholder="microchip_id">

            <input type="submit" value="Create Pet">
        </form>
    </div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
