<?php
$host = "localhost";
$name = "dbportfolio";
$user = "";    
$passwort = "";    

try{
  $mysql = new PDO("mysql:host=$host; dbname=$name", $user, $passwort);
  } catch(PDOexception $e){
    echo "SQL ERROR: ".$e->getMessage();
}

?>
