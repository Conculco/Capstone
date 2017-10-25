
<?php
session_start();

?>
<?php
include 'configsqli.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovey Pets</title>
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
<script>
  $( function datepicking() {
$("#date").datepicker({
    dateFormat: 'yy-mm-dd'
});
});

  </script>
  <div class="center">
    <form action="create/datepick.php" method="post">
    <label>Date</label>
      <input type="text" name="date" id="date" onchange ="javascript:changeDate();" readonly>
            <input type='submit' value="Continue">
        </form>
        <div id="divResult">
        </div>
</div>


<?php
    include 'footer.php';
?>
</body>

</html>
