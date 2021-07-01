<?php
session_start();
  if(!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
  };
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
  <div class="container">
    <h2 class="name">Hallo Admin</h2>
    <h3>hier kannst du die Accounts erstellen:</h3>
    <li><a href="logout.php">Logout</a></li>

</body>
