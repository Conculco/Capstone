﻿<?php
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

<h1> Services </h1>

<font size= "4">

<p class= "small"> Our team of nurses is willing to assist you with parasite control and nurtitional advice. <br/>

<p class= "small"> The nursing team can also provide:<br/>


<ul>
    <li> Clipping & grooming </li>
    <li> Hydrobaths </li>
    <li> Nutritional advice </li>
    <li> Free parasite checks </li>
    <li> Free weight management consultations </li>
</ul>

</br>


<h1> Veterinary Services available include: </h1>

<p class= "small">
<ul>
    <li> Health checks & Vaccinations </li>
    <li> Soft tissue & Orthopaedic surgery </li>
    <li> Dentistry </li>
    <li> X-ray/Radiology </li>
    <li> Microchipping & Desexing </li>
</ul>








<?php
    include 'footer.php';
?>
  </body>
</html>
