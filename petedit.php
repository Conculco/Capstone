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
<div class="whitespace"> </div>
<div class="center2">
<?php
    $pet_id = $_GET['pet_id'];
    $customer_id = $_GET['customer_id'];
    ?>
    <form action="create/editpet.php"method="post">
    <input type="hidden" name="pet_id" value="<?php echo $pet_id; ?>"/>
    <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>"/>
    <div>
    <p><strong>Pet ID:</strong> <?php echo $pet_id; ?></p>
    <p><strong>Customer ID:</strong> <?php echo $customer_id; ?></p>

    <strong>Pet Name: *</strong> <input type="text" name="petname" value="<?php echo $_GET['petname']?>"/><br/>

    <strong>Pet DOB: *</strong> <input type="text" name="dob" value="<?php echo $_GET['dob']?>"/><br/>

    <strong>Pet Sex: *</strong> <input type="text" name="sex" value="<?php echo $_GET['sex'];?>"/><br/>

    <strong>Species: *</strong> <input type="text" name="species" value="<?php echo $_GET['species']?>"/><br/>

    <strong>Breed: *</strong> <input type="text" name="breed" value="<?php echo $_GET['breed']?>"/><br/>

    <strong>Description: *</strong> <input type="text" name="description" value="<?php echo $_GET['description']?>"/><br/>

    <strong>Microchip: *</strong> <input type="text" name="microchip_id" value="<?php echo $_GET['microchip_id']?>"/><br/>

    <p>* Required</p>

    <input type="submit" name="submit" value="Submit">

    </div>

    </form>


<div class="whitespace"> </div>
</div>
<?php
    include 'footer.php';
?>
</body>

</html>
