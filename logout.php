<?php
  session_start();
  session_destroy();
  header("location: login.php");

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php

     if(isset($_POST["submit"])) {
      
         $stmt = $mysql->prepare("SELECT * FROM user WHERE username =:user");// USERNAME ÜBERPRÜFFEN
         $stmt->bindParam(":user", $_POST["username"]);
         $stmt->execute();
         $count = $stmt->rowCount();
         if($count == 1) {
           // dann ==> USERNAME IST FREI dann
           //poaaswort überprüfen
           $row = $stmt->fetch();
           if (password_verify($_POST["pw"], $row["userpass"])) {
             session_start();
             $_SESSION["username"] = $row["username"];
             header("location: index.php");
           } else {
               echo "Login ist fehlgeschlagen";
             }
           } else {
           echo "Login ist fehlgeschlagen";
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
