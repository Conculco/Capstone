<?php
if(!isset($_SESSION['access'])) {
    header('Location: login.php');
}
?>