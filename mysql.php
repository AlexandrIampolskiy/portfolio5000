<?php
$host = "localhost";
$name = "dbportfolio";
$user = "root";     /* for XAMPP use 'root' for FEBAS use "userkempalshik";*/
$passwort = "";     /* for XAMPP use '' for FEBAS use "Alex0711alex0711" */

try{
  $mysql = new PDO("mysql:host=$host; dbname=$name", $user, $passwort);
  } catch(PDOexception $e){
    echo "SQL ERROR: ".$e->getMessage();
}

?>
