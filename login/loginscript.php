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
        echo "Here";
      foreach ($result as $row) {
      //if (password_verify($_POST["password"], $row["password"]))
      if (crypt($_POST["password"], $_POST["password"]) == $row["password"] ) {
          //Password is valid
          $_SESSION["id"] = $row["id"];
          $_SESSION["username"] = $row["username"];
          $_SESSION["email"] = $row["email"];
          header("Location: ../index.php");
		  die();
      } else {
          //Password is invalid
          $_SESSION["errorUser"] = $_POST["username"];
          $_SESSION["errorPass"] = $_POST["password"];
          header("Location: ../login.php");
		  die();
      }
    }
  } else {
    //Username Not Found
    $_SESSION["errorUser"] = $_POST["username"];
    $_SESSION["errorPass"] = $_POST["password"];
    header("Location: ../login.php");
}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

