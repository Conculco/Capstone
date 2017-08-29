<header>
    <div class="Logo"><a href="index.php"><img src="img/logo.png" width="100" height="50"></a>
    </div>
    <div id="branding">
        <h1>Lovely <span class="highlight">Pets</span></h1>
    </div>

    <nav>
        <ul>
            <li>Welcome, <b><?php echo $_SESSION["username"];?></b></li>
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="searchcustomer.php">Search</a></li>
            <li><a href="createcustomer.php">Customer</a></li>
            <li><a href="walkin.php">Walk-Ins</a></li>
            <li><a href="reception.php">Inventory</a></li>
        </ul>
    </nav>
</header>
