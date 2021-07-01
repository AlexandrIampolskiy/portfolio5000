<?php
session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
};
require('language.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- <script src="parallax.min.js"></script> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet"> -->
    <title>It-Alexandr</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <div id="logo"  class="logo" onClick="document.location.href='index.php'">
                    Alexandr Iampolskaia
                </div>
                
                <ul id="ulLinks">
                    <li onClick="document.location.href='index.php'">
                        <a href="index.php"> Home</a>
                    </li>
                    <li onClick="document.location.href='bewerbung.php'"><a href="bewerbung.php"><?php translate("header.menuApplication")?></a></li>
                    <li onClick="document.location.href='lebenslauf.php'"><a href="lebenslauf.php"><?php translate("header.menuCv")?></a></li>
                    <li onClick="document.location.href='projekte.php'"><a href="projekte.php"><?php translate("header.menuProjects")?></a></li>
                    <li onClick="document.location.href='logout.php'"><a href="logout.php"><?php translate("header.menuLogout")?></a></li>
                </ul>
                
            </div>
            <a href="<?php $_SERVER['PHP_SELF']; ?>" id="changeToEn" class="changeToEn"><img class="langEn" src="img/en.png" alt=""></a>
            <a href="<?php $_SERVER['PHP_SELF']; ?>" id="changeToDe" class="changeToDe"><img class="langDe" src="img/de.png" alt=""></a>
        </nav>
        
    </header>
