<?php
    $clinic_id2=$_POST['clinic_id1'];
    $firstname2=$_POST['firstname1'];
    $lastname2=$_POST['lastname1'];
    $dob2=$_POST['dob1'];
    $username2=$_POST['username1'];
    $password2=crypt($_POST['password1'], $_POST['password1']);
    $phoneNumber2=$_POST['phoneNumber1'];
    $address2=$_POST['address1'];
    $city2=$_POST['city1'];
    $postCode2=$_POST['postCode1'];
    $email2=$_POST['email1'];

    $connection = mysql_connect("lovelypetsdbinstance.cqs865i0h9cb.ap-southeast-2.rds.amazonaws.com:3306", "sa", "Password01!"); // Establishing Connection with Server..
    $db = mysql_select_db("LovelyPetsDB", $connection); // Selecting Database
    if (isset($_POST['clinic_id'])) {
        $query = mysql_query("insert into Staff(clinic_id, firstname, lastname, dob, username, password, phoneNumber, address, city, postCode, email) values ('$clinic_id2', '$firstname2', '$lastname2', '$dob2', '$username2', '$password2', '$phoneNumber2', '$address2', '$city2', '$postCode2', '$email2')"); //Insert Query
        echo "Form Submitted succesfully";
    }
    mysql_close($connection); // Connection Closed
?>