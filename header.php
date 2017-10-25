<?php
include 'access_control.php';
?>
<header>
    <div class="Logo"><a href="index.php"><img src="img/logo.png" width="100" height="50"></a>
    </div>
    <div id="branding">
        <h1>Lovely <span class="highlight">Pets</span></h1>
    </div>
    <nav>
        <ul>
            <?php
            if (isset($_SESSION["username"])){
                    echo "<li>Welcome, <b>" . $_SESSION["username"] . "</b></li>";
                    echo "<li><a href=\"logout.php\">Logout</a></li>";
            }
            ?>
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="searchcustomer.php">Search Customers</a></li>
            <li><a href="createcustomer.php">Create Customers</a></li>
            <li><a href="bookingdate.php">View Bookings</a></li>
        </ul>
    </nav>
</header>
