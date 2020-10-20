<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

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
      if($row["admin"]==1){
        header("location: admin.php");
      }

    }
    ?>

    <h2>bitte loggen Sie sich hier mit Ihren Daten ein: </h2>
    <form class="form" method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="text" name="pw" placeholder="Passwort" required>
      <button type="submit" name="submit">Login</button>
    </form>
    <br>
  </body>
</html>
