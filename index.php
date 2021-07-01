<?php
    require('header.php');
?>

<!-- Preload! für die Bilder  -->
    <div id="preloader">
        <!-- Programmkioersprachen Pics -->
        <img src="img/html.jpg" alt="">
        <img src="img/css.jpg" alt="">
        <img src="img/javascript.jpg" alt="">
        <img src="img/php.jpg" alt="">
        <img src="img/csharp.jpg" alt="">
        <img src="img/java.jpg" alt="">
        <img src="img/c++.jpg" alt="">
        <img src="img/solidity.jpg" alt="">
        <img src="img/keyboard.jpg" alt="">

        <!-- main Pics Download -->
        <img src="img/skyline.jpg" alt="">
        <img src="img/wm1111.jpg" alt="">
        <img src="img/winter.jpg" alt="">
        <img src="img/sunset.jpg" alt="">
        <img src="img/satelite.jpg" alt="">
        <img src="img/sea.jpg" alt="">
        <img src="img/trees.jpg" alt="">
        <img src="img/pyrenees.jpg" alt="">
        <img src="img/dive.jpg" alt="">
        <img src="img/forest.jpg" alt="">
    </div>



<main>

    <section class="main-wrapper-img">
        <h2 class="imgWelcome" onmouseover="mouseIn()" ><?php translate("index.welcomeText")?></h2> 
    </section> <!-- bild unter dem nav -->
    <!-- main text -->
    <section class="typing-wrapper-text">
        <h2 class="welcome"><?php translate("index.animConst0")  ?></h2> 
        <div class="welcome-autotype"><?php translate("index.animConst1")  ?>
        <span class="txt-type" data-wait="3000" data-words='["<?php translate("index.animText0")?>", "<?php translate("index.animText1")?>"]'></span>
    </div>
    </section>
    <!-- main cards -->
    
    <section class="main-wrapper-cards">
        <h2 class="title"><?php translate("index.ov.skills")?></h2>
        <div class="portfolio-cards-wrapper">
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image html"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">HTML<!-- <img src="css.png" alt=""> --></div>
                    <div class="card-content-text"></div>
                    <div class="skills">
                        <li>
                            <h5><?php translate("index.card.progress")?></h5><span class="bar"><span class="html"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image css"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">CSS<!-- <img src="css.png" alt=""> --></div>
                    <div class="card-content-text"><!-- Hier steht etwas über meine Erfahrung mit CSS --></div>
                    <div class="skills">
                        <li>
                            <h5><?php translate("index.card.progress")?></h5><span class="bar"><span class="css"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image js"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">Java Script<!-- <img src="css.png" alt=""> --></div>
                    <div class="card-content-text"><!-- Hier steht etwas über meine Erfahrung mit JavaScript --></div>
                    <div class="skills">
                        <li>
                            <h5><?php translate("index.card.progress")?></h5><span class="bar"><span class="javascript"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image php"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">PHP<!-- <img src="css.png" alt=""> --></div>
                    <div class="card-content-text"><!-- Hier steht etwas über meine Erfahrung mit PHP --></div>
                    <div class="skills">
                        <li>
                            <h5><?php translate("index.card.progress")?></h5><span class="bar"><span class="php"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image csharp"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">C#<!-- <img src="csharp.png" alt=""> --></div>
                    <div class="card-content-text"><!-- Hier steht etwas über meine Erfahrung mit C# --></div>
                    <div class="skills">
                        <li>
                            <h5><?php translate("index.card.progress")?></h5><span class="bar"><span class="csharp"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image java"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">Java<!-- <img src="java.png" alt=""> --></div>
                    <div class="card-content-text"><!-- Hier steht etwas über meine Erfahrung mit Java --></div>
                    <div class="skills">
                        <li>
                            <h5><?php translate("index.card.progress")?></h5><span class="bar"><span class="java"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image sql"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">SQL<!-- <img src="png/c++.png"  alt=""--></div>
                    <div class="card-content-text"><!-- Hier steht etwas über meine Erfahrung mit C++ --></div>
                    <div class="skills">
                        <li>
                            <h5><?php translate("index.card.progress")?></h5><span class="bar"><span class="sql"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image solidity"></div> <!-- BILD ZU GROSS ALLES LAHM MUSS UMKONVERTIEREN -->
                <div class="card-content-wrapper">
                    <div class="card-content-logo">Solidity<!-- <img src="css.png" alt=""> --></div>
                    <div class="card-content-text"><!-- Hier steht etwas über meine Erfahrung mit Solidity --></div>
                    <div class="skills">
                        <li>
                            <h5><?php translate("index.card.progress")?></h5><span class="bar"><span class="solidity"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image py"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">Python<!-- <img src="css.png" alt=""> --></div>
                    <div class="card-content-text"><!-- Hier steht etwas über meine Erfahrung mit Python --></div>
                    <div class="skills">
                        <li>
                            <h5><?php translate("index.card.progress")?></h5><span class="bar"><span class="python"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- SLIDER Projekte -->
    <section class="slider">
        <h2 class="title"><?php translate("index.ov.projects")?></h2>
        <div class="carousel-container">
            <i id=btnPrev class="fas fa-arrow-left"></i><!-- fa-arrow-left -->
            <i id=btnNext class="fas fa-arrow-right"></i><!-- fa-arrow-right -->
            <div class="carousel-slide">
<!--
                <div class="img-wrap">
                    <img src="img/keyboard.jpg" alt="" width=640px height=480px id=lastClone>
                    <span class="img-text">
                        <h1><a href="">ProjektName</a></h1>
                        Hier steht die Beschreibung des Projekts <br> 
                        Hier steht die Beschreibung desProjekts <br>
                    </span>
                </div>
-->
                <div class="img-wrap">
                    <a class="noPointer" href="Projekte/P1-Dice/index.html" target="_blank"><img src="img/ProjektDice.jpg" alt="" width=640px height=480px></a>
                    <span class="img-text">
                        <h1><a href="Projekte/P1-Dice/index.html" target="_blank"><?php translate("index.slider.proDice")?></a></h1>
                        <p class="projektDetail"><?php translate("index.slider.proDiceName")?></p>   
                        <p class="projektDetail">HTML, CSS, JavaScript</p>   
                        <p class="projektDetail"><?php translate("index.slider.difficultyEasy")?></p>   
                    </span>
                </div>
                
                <div class="img-wrap">
                    <a class="noPointer" href="Projekte/P3-Clock/index.html" target="_blank"><img src="img/clock.jpg" alt="" width=640px height=480px></a>
                    <span class="img-text">
                        <h1><a href="Projekte/P3-Clock/index.html" target="_blank"><?php translate("index.slider.proClock")?></a></h1>
                        <p class="projektDetail"><?php translate("index.slider.proClockName")?></p>   
                        <p class="projektDetail">JavaScript, HTML, CSS</p>   
                        <p class="projektDetail"><?php translate("index.slider.difficultyMed")?></p>  
                    </span>
                </div>

                <div class="img-wrap">
                    <a class="noPointer" href="Projekte//P2-Cards/index.html" target="_blank"><img src="img/ProjektCards.jpg" alt="" width=640px height=480px></a>
                    <span class="img-text">
                        <h1><a href="Projekte/P2-Cards/index.html" target="_blank"><?php translate("index.slider.proCards")?></a></h1>
                        <p class="projektDetail"><?php translate("index.slider.proCardsName")?></p>   
                        <p class="projektDetail">JavaScript, HTML, CSS</p>   
                        <p class="projektDetail"><?php translate("index.slider.difficultyHard")?></p>  
                    </span>
                </div>

                <div class="img-wrap">
                    <a class="noPointer" href="Projekte/P1-Dice/index.html" target="_blank"><img src="img/ProjektDice.jpg" alt="" width=640px height=480px></a>
                    <span class="img-text">
                        <h1><a href="Projekte/P1-Dice/index.html" target="_blank"><?php translate("index.slider.proDice")?></a></h1>
                        <p class="projektDetail"><?php translate("index.slider.proDiceName")?></p>   
                        <p class="projektDetail">HTML, CSS, JavaScript</p>   
                        <p class="projektDetail"><?php translate("index.slider.difficultyEasy")?></p>   
                    </span>
                </div>
<!--
                <div class="img-wrap">
                    <img src="img/csharp.jpg" alt="" width=640px height=480px>
                    <span class="img-text">
                        <h1><a href="">ProjektName</a></h1>
                        Hier steht die Beschreibung des Projekts<br>
                        Hier steht die Beschreibung des Projekts<br>
                    </span>
                    
                </div>

                <div class="img-wrap">
                    <img src="img/keyboard.jpg" alt="" width=640px height=480px>
                    <span class="img-text">
                        <h1><a href="">ProjektName</a></h1>
                        Hier steht die Beschreibung des Projekts<br>
                        Hier steht die Beschreibung des Projekts<br>
                    </span>
                    
                </div>

                <div class="img-wrap">
                    <img src="img/ProjektDice.jpg" alt="" width=640px height=480px id=firstClone>
                    <span class="img-text">
                        <h1><a href="">ProjektName</a></h1>
                        Hier steht die Beschreibung des Projekts<br>
                        Hier steht die Beschreibung des Projekts<br>
                    </span>
-->

                </div>
            </div>
        </div>
    </section>

        <!-- contact-Form -->

    <?php

    $messageSend = false;

    if(isset($_POST['email']) && $_POST['email'] != '' ) {
        
            $userName = stripslashes($_POST['name']);
            $email = stripslashes($_POST['email']);
            $subject = stripslashes($_POST['subject']);
            $tel = stripslashes($_POST['tel']);
            $message = stripslashes($_POST['msg']). "\r\n";
            $message .= " Email: " . $_POST['email']. "\r\n";
            $message .= " Tel: " . $_POST['tel']. "\r\n";
            $message .= " Name: " . $_POST['name']. "\r\n";


            $to = "alexandr.iampolskaia@gmail.com";
            /* $body = "";
            $body .= "From: " . $userName . "\r\n";
            $body .= "Email: " . $email . "\r\n";
            $body .= "Message: " . $message . "\r\n";
            $body .= "tel: " . $tel . "\r\n"; */
            
            mail($to, $subject, $message);
            $messageSend = true;
    }

    ?>

    <section class="contact-form">
        <h2 class="title"><?php translate("index.ov.contact")?></h2>
        <form action="index.php" method="POST">
            <div class="contact-form-wrapper">
                <div class="cf-input-fields">
                    <input type="text" id="name" name="name" class="input" placeholder="<?php translate("index.form.Name")?>" required>
                    <input type="text" id="email" name="email" class="input" placeholder="<?php translate("index.form.E-Mail")?>" required>
                    <input type="text" id="subject" name="subject" class="input" placeholder="<?php translate("index.form.Subject")?>" required>
                    <input type="text" id="tel" name="tel" class="input" placeholder="<?php translate("index.form.Tel")?>" required>
                </div>
                <div class="cf-msg">
                    <textarea id="msg" name="msg" class="input" placeholder="<?php translate("index.form.Message")?>" required></textarea>
                    <button class="cf-btn"><?php translate("index.form.Send")?></button>
                </div>
            </div>
        </form>
    </section>

</main>

<?php
    require('footer.php');
?>
    

</body>
