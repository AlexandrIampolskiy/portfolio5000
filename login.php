<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">

    <title>It-Alexandr</title>
  </head>
  <body>

    <?php
    $value = "DE"; //Sprache Cookie Voreinstellung
    setcookie("lang", $value);
    

    if(isset($_POST["submit"])) {
        require("mysql.php");
          $stmt = $mysql->prepare("SELECT * FROM user WHERE username =:user");// USERNAME ÜBERPRÜFFEN
          $stmt->bindParam(":user", $_POST["username"]);
          $stmt->execute();
          $count = $stmt->rowCount();
          if($count == 1) {
            $row = $stmt->fetch();
            if (password_verify($_POST["pw"], $row["userpass"])) {
              session_start();
              $_SESSION["username"] = $row["username"];
              echo $row["username"];
              header("location: index.php");
            } else {
                echo "Passwort falsch";
            }
            } else {
              echo "Dieser Benutzername ist nicht bekannt";
            }
            $row = 0;
            if($row["admin"]==1){
              header("location: admin.php");
            }
      }
    ?>

    <div class="loginField">
      <h2>Hallo, bitte loggen Sie sich hier mit Ihren Daten ein: </h2>
      <form class="loginForm" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="pw" placeholder="Passwort" required>
        <button type="submit" name="submit">Login</button>
      </form>
    </div>
  </body>
</html>
