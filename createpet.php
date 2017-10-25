<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <title>Lovely Pets</title>
    <link rel="icon" href="img/favicon.ico"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<?php
include 'header.php';
?>
<div class="center">
    <form action="create/petscript.php" method="post">
        <input name="customer_id" type="hidden" value="<?php echo $_GET['id'];?>">

        <label>Pet Name</label>
        <input name="petname" type="text" placeholder="">

        <label>Date of Birth</label>
        <input name="dob" type="text" placeholder="">

        <label>Sex</label>
        <select name="sex">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="n/a">N/A</option>
        </select>

        <label>Species</label>
        <input name="species" type="text" placeholder="Cat/Dog">

        <label>Breed</label>
        <input name="breed" type="text" placeholder="">

        <label>Description</label>
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
