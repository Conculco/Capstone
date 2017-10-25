<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Enterprise solution for Pet Clinics">
    <meta name="author" content="Lovely Pets">
    <title>Lovely Pets | Welcome</title>
    <link rel="icon" href="img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
p.small {
    line-height: 0.5;
}

p.big {
    line-height: 5.0;
}
</style>
<body>
<?php
include 'header.php';
?>

<h1> Find a Vet </h1>

<font size= "4">

<p class= "big"> Lovely Pets Veterinary aims to be Australia’s leading veterinary group by providing pet owners access to a network of local practices run by local teams of vets, nurses and reception staff.<br/>

<p class= "small"> Lovely Pets Veterinary offers exceptional client and patient care giving you peace of mind that when in our care, your pet will be treated like family.<br/>




<p>To find your local vet enter your post code below: </p>




<?php
    include 'footer.php';
?>
  </body>
</html>
