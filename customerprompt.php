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
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    ?>
    <form action="create/customerdelete.php"method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>

    <div>
    <p><strong>Customer to be DELETED:</strong> <?php echo " "; echo $firstname;echo " "; echo $lastname ?></p>

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
