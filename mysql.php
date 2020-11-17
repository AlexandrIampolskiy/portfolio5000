<?php
$host = "localhost";
$name = "dbportfolio";
$user = "";     /* for XAMPP use '' for FEBAS use "";*/
$passwort = "";     /* for XAMPP use '' for FEBAS use " */

try{
  $mysql = new PDO("mysql:host=$host; dbname=$name", $user, $passwort);
  } catch(PDOexception $e){
    echo "SQL ERROR: ".$e->getMessage();
}

?>
