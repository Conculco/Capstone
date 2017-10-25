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
    $petname = $_GET['petname'];
    ?>
    <form action="create/petdelete.php"method="post">
    <input type="hidden" name="pet_id" value="<?php echo $pet_id; ?>"/>
    <input type="hidden" name="petname" value="<?php echo $petname; ?>"/>
    <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>"/>

    <div>
    <p><strong>Pet to be DELETED:</strong> <?php echo $petname;?></p>

    <input type="submit" name="submit" onclick="return confirm('This is a pretty hefty task, are you really sure you want to do it?')" value="DELETE">

    </div>

    </form>


<div class="whitespace"> </div>
</div>
<?php
    include 'footer.php';
?>
</body>

</html>
