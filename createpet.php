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
        <form name="form" id="form">
            <label>customer_id</label>
            <input id="customer_id" type="text" value="<?php echo $_GET['id'];?>">

			<label>Pet Name</label>
            <input id="petname" type="text" placeholder="">

			<label>Date of Birth</label>
            <input id="dob" type="text" placeholder="">

			<label>Sex</label>
            <input id="sex" type="text" placeholder="Male/Female">

			<label>Species</label>
            <input id="species" type="text" placeholder="Cat/Dog">

			<label>Breed</label>
            <input id="breed" type="text" placeholder="">

			<label>Description</label>
            <input id="description" type="text" placeholder="description">

			<label>Microchip_id</label>
            <input id="microchip_id" type="text" placeholder="microchip_id">

            <input type="button" id="submit" onclick="createPetFunction()" value="Create Pet">
        </form>
    </div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
