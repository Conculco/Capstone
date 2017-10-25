<?php
session_start();
?>
<?php
include 'configsqli.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovely Pets</title>
    <!-- Minified JS library -->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="js/main.js">
        $(document).ready(function () {
          $('#date').change(function() {
            var selectedValue = $(this).val();
            $('#divResult').html(selectedValue);
          });
        });
      </script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<?php
    include 'header.php';
?>
  <div class="whitespace"> </div>
    <div class="center">
      <p>Customer Name: ………..</p>

          <p>Pet Name: ………………..</p>

  <p>Pet Type: ………………….</p>

  <p>  Booking Type: …………………..</p>

    <p>Booking Time: <?php echo $_GET['date']?></p>

    <p>Has been confirmed.</p>

    <p>A confirmation has been sent.</p>

  	  <p>	Print this confirmation 	</p> 			Return to Home Page </p>
</div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
