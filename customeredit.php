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
    $id = $_GET['id'];
    ?>
    <form action="create/editcustomer.php"method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>

    <div>
    <p><strong>ID:</strong> <?php echo $id; ?></p>

    <strong>First Name: *</strong> <input type="text" name="firstname" value="<?php echo $_GET['firstname'];?>"/><br/>

    <strong>Last Name: *</strong> <input type="text" name="lastname" value="<?php echo $_GET['lastname']?>"/><br/>

    <p>* Required</p>

    <input type="submit" name="submit" value="Submit">

    </div>

    </form>


<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
