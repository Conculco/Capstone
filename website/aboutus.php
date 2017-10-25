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
<header>
    <div class="Logo"><a href="index_2.php"><img src="img/logo.png" width="100" height="50"></a>
    </div>
    <div id="branding">
        <h1>Lovely <span class="highlight">Pets</span></h1>
    </div>

    <nav>
        <ul>
            <li class="current"><a href="index_main.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="findavet.php">Find a Vet</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li>
            <li><a href="services.php">Services</a></li>

        </ul>
    </nav>
</header>

<h1 class= "big"> Your Lovely Pets' Team </h1>
<p> <br/> 

<font size= "4">

<p class= "small">
Diagnosis is the foundation of veterinary medicine. It is absolutely essential that we know exactly </p>

<p class= "small"> what is wrong with your pet, as it is only then that accurate and meaningful decisions can be made </p>

<p class= "small"> about the treatment and management of a problem.
</p>

<p> <br/> 

<p class= "small">
Our commitment at Lovely Pets Veterinary is that we will do everything possible to arrive at an accurate, </p>


 <p class= "small"> precise and confirmed diagnosis so that owners can make informed decisions that maximise </p>

 <p class= "small">the wellbeing, welfare and functionality of their pet. 
</p>

<p> <br/> 

<div> 
<img src="main-page.jpg" />
</div>

<p class= "small"> <b> Dr. Michelle Watkins <br/>
<p class= "small">    Head Veterinary Specialist <br/>
  <p class= "small">  Milton Lovely Pets Clinic <br/>

<div> 
<img src="vet2.jpg" />
</div>


<p class= "small"> <b> Dr. Natalie Judge <br/>
<p class= "small">    Head Veterinary Specialist <br/>
  <p class= "small">  Macgregor Lovely Pets Clinic <br/>


<div> 
<img src="vet3.jpg" />
</div>


<p class= "small"> <b> Dr. Jordan Yann <br/>
<p class= "small">    Head Veterinary Specialist <br/>
  <p class= "small">  Newmarket Lovely Pets Clinic <br/>

<div> 
<img src="vet4.jpg" />
</div>

<p class= "small"> <b> Dr. Spencer Katsofros <br/>
<p class= "small">    Head Veterinary Specialist <br/>
  <p class= "small">  Inala Lovely Pets Clinic <br/>



<?php
    include 'footer.php';
?>
  </body>
</html>
