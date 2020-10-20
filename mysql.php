<?php
$host = "localhost";
$name = "dbportfolio";
$user = "userkempalshik";     /* for XAMPP use '' for FEBAS use "userkempalshik";*/
$passwort = "Alex0711alex0711";     /* for XAMPP use '' for FEBAS use "Alex0711alex0711" */

try{
  $mysql = new PDO("mysql:host=$host; dbname=$name", $user, $passwort);
  } catch(PDOexception $e){
    echo "SQL ERROR: ".$e->getMessage();
}

?>
