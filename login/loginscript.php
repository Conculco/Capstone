<body>
    <h1>Lovely Pets Information System</h1>
</body>


<?php
  include("../config.php");
  session_start();
  session_unset();

try {
    $sql = $conn->prepare("SELECT * FROM Staff WHERE username = ?");
    $sql->execute(array($_POST['username']));
    $result = $sql->fetchall();
	
    if ($sql->rowCount() == 1){
      foreach ($result as $row) {
      //if (password_verify($_POST["password"], $row["password"]))
      if (crypt($_POST["password"], $row["password"]) == $row["password"] ) {
          //Password is valid
          $_SESSION["id"] = $row["id"];
          $_SESSION["username"] = $row["username"];
          $_SESSION["email"] = $row["email"];
          header("Location: http://IT_WORKED");
		  die();
      } else {
          //Password is invalid
          $_SESSION["errorUser"] = $_POST["username"];
          $_SESSION["errorPass"] = $_POST["password"];
          header("Location: http://IT_FAILED");
		  die();
      }
    }
  } else {
    //Username Not Found
    $_SESSION["errorUser"] = $_POST["username"];
    $_SESSION["errorPass"] = $_POST["password"];
    //header("Location: localhost/Capstone/login.php");
}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

