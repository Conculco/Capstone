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
            <li><a href="searchcustomer.php">Search</a></li>
            <li><a href="createcustomer.php">Customer</a></li>
            <li><a href="walkin.php">Walk-Ins</a></li>
            <li><a href="reception.php">Inventory</a></li>
        </ul>
    </nav>
</header>
