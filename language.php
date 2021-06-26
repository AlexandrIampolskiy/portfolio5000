<?php 

function translate($text) { 
    $de = array(
        //menu in header.php
        "header.menuApplication" => "Bewerbung",   
        "header.menuCv" => "Lebenslauf",
        "header.menuProjects" => "Projekte",
        "header.menuLogout" => "Ausloggen",

        //main section class="main-wrapper-img" in index.php
        "index.welcomeText" => "Wilkommen auf meinem Portfolio",
        "index.animConst0" => "Hier können Sie sich",
        "index.animConst1" => "sehr gerne",
        "index.animText0" => "meine Bewerungsunterlagen asehen.",
        "index.animText1" => "einen Überblick über meine Erfahrung und einiger meiner meine Projekte verschaffen.",

        //main <section class="main-wrapper-cards"> in index.php
        "index.ov.skills" => "Erfahrung",
        "index.card.progress" => "Fortschritt",
        "index.ov.projects" => "Projekte",

        //main <section class="slider"> in index.php
        "index.slider.proDice" => "Würfel",
        "index.slider.proClock" => "Uhr",
        "index.slider.proCards" => "Kartentrick",
        "index.slider.proDiceName" => "Würfeln im Browser",
        "index.slider.proClockName" => "Uhr",
        "index.slider.proCardsName" => "Kartentrick",
        "index.slider.difficultyEasy" => "Schwierigkeisstufe: Leicht",
        "index.slider.difficultyMed" => "Schwierigkeisstufe: Mittel",
        "index.slider.difficultyHard" => "Schwierigkeisstufe: Schwer",

        //main  <section class="contact-form"> in index.php
        "index.ov.contact" => "Kontakt",
        "index.form.Name" => "Name",
        "index.form.E-Mail" => "E-Mail",
        "index.form.Subject" => "Betreff",
        "index.form.Tel" => "Tel",
        "index.form.Message" => "Nachricht",
        "index.form.Send" => "Senden",
    );

    $en = array(
        //menu in header.php
        "header.menuApplication" => "Application", 
        "header.menuCv" => "Curriculum Vitae",             
        "header.menuProjects" => "Projects",
        "header.menuLogout" => "Logout",

        //main section class="main-wrapper-img" in index.php
        "index.welcomeText" => "Wellcome to my portfolio",
        "index.animConst0" => "you are very welcome",
        "index.animConst1" => "to",
        "index.animText0" => "view my application documents.",
        "index.animText1" => "get an overview of my experience and some of my projects.",

        //main <section class="main-wrapper-cards"> in index.php
        "index.ov.skills" => "Skills",
        "index.card.progress" => "Progress",
        "index.ov.projects" => "Projects",

        //main <section class="slider"> in index.php
        "index.slider.proDice" => "Dice",
        "index.slider.proClock" => "Clock",
        "index.slider.proCards" => "Cards",
        "index.slider.proDiceName" => "dice game",
        "index.slider.proClockName" => "world clock",
        "index.slider.proCardsName" => "card trick",
        "index.slider.difficultyEasy" => "difficulty level: easy",
        "index.slider.difficultyMed" => "difficulty level: medium",
        "index.slider.difficultyHard" => "difficulty level: hard",

        //main  <section class="contact-form"> in index.php
        "index.ov.contact" => "Contact",
        "index.form.Name" => "Name",
        "index.form.E-Mail" => "E-Mail",
        "index.form.Subject" => "Subject",
        "index.form.Tel" => "Phone Number",
        "index.form.Message" => "Message",
        "index.form.Send" => "Send",

        //main  <section class="letter_content centered"> in bewerbung.php
        // "sehr geehrte..." wenn cookie=EN dann Anrede in bewerbung.php (ca.Z.73 "print_r($row['anrede']);")
        "bewerbung.cv.salutation" => "dear"
    );  

    $ru = array(
        "header.menuApplication" => "Application", 
        "header.menuCv" => "Curriculum Vitae",             
        "header.menuProjects" => "Projects",
        "header.menuLogout" => "Logout",
        "index.welcomeText" => "Wellcome to my portfolio",
    );


    switch($_COOKIE["lang"]) {
        case 'DE': echo $de[$text]; 
        break;
        case 'EN': echo $en[$text];
        break;
        case 'RU': echo $ru[$text];
        break;
    }
};

?>

