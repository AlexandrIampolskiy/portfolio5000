<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php
      require('header_admin.php');

    if(isset($_POST["submit"])) {
      require("mysql.php");
        $stmt = $mysql->prepare("SELECT * FROM user WHERE username =:user");// USERNAME ÜBERPRÜFFEN
        $stmt->bindParam(":user", $_POST["username"]);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 0) {
          // dann ==> USERNAME IST FREI dann
          if($_POST["pw"] == $_POST["pw2"]) {
            // ==> USER ANLEGEN
              $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
              $stmt = $mysql->prepare("INSERT INTO user (username, userpass, anrede, company, companystreet, companyplz, companycity) VALUES(:user, :pw, :anrede, :company, :companystreet, :companyplz, :companycity)");
              $stmt->bindParam(":user", $_POST["username"]);
              $stmt->bindParam(":pw", $hash);
              $stmt->bindParam(":anrede", $_POST["anrede"]);
              $stmt->bindParam(":company", $_POST["company"]);
              $stmt->bindParam(":companystreet", $_POST["companystreet"]);
              $stmt->bindParam(":companyplz", $_POST["companyplz"]);
              $stmt->bindParam(":companycity", $_POST["companycity"]);
              $stmt->execute();
              echo "Dein Account wurde angelegt";
            } else {
              echo "Das Passwort stimmmt nicht überein";
            }
          } else {
          echo "Username ist schon vergeben";
        }
    }

    ?>


    <h1>Account erstellen:</h1>
    <form class="form" method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="text" name="pw" placeholder="Passwort" required>
      <input type="text" name="pw2" placeholder="Passwort wiederholen" required>
      <input type="text" name="anrede" placeholder="Anrede mit Komma">
      <input type="text" name="company" placeholder="Firma">
      <input type="text" name="companystreet" placeholder="Straße mit Nr">
      <input type="text" name="companyplz" placeholder="PLZ">
      <input type="text" name="companycity" placeholder="Stadt">
      <button type="submit" name="submit">Erstellen</button>
      <br>

    </form>

  </body>
</html>
