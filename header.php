<?php
session_start();
    if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    };
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
    <script src="parallax.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <title>Portfolio</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <div class="logo" onClick="document.location.href='index.php'">
                    Alexandr Iampolskaia
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="bewerbung.php">Bewerbung</a></li>
                    <li><a href="lebenslauf.php">Lebenslauf</a></li>
                    <li><a href="projekte.php">Projekte</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
