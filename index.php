<?php
    require('header.php');
?>

<main>
    <section id="main-wrapper-img" class="main-wrapper-img"></section> <!-- bild unter dem nav -->
    <!-- main text -->
    <section class="main-wrapper-text">
        <h1 class="welcome">Wilkommen auf meiner Bewerbungsmappe    
        <br>
        Hier können Sie sich
        <span class="txt-type" data-wait="3000" data-words='["meine Bewerungsunterlagen einsehen.", "einen Überblick über meine Erfahrung und meine Projekte verschaffen."]'></span>
        </h1>
    </section>
    <!-- main cards -->
    <section class="main-wrapper-cards">
        <div class="portfolio-cards-wrapper">
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image" style="background-image: url(img/html.jpg);"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">HTML<!-- <img src="css.png" alt=""> --></div>
                    <div class="card-content-text">Hier steht etwas über meine Erfahrung mit HTML</div>
                    <div class="skills">
                        <li>
                            <!-- <h5>HTML progress</h5> --><span class="bar"><span class="html"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image" style="background-image: url(img/css.jpg);"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">CSS<!-- <img src="css.png" alt=""> --></div>
                    <div class="card-content-text">Hier steht etwas über meine Erfahrung mit CSS</div>
                    <div class="skills">
                        <li>
                            <!-- <h5>CSS progress</h5> --><span class="bar"><span class="css"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image" style="background-image: url(img/javascript.jpg);"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">Java Script<!-- <img src="css.png" alt=""> --></div>
                    <div class="card-content-text">Hier steht etwas über meine Erfahrung mit JavaScript</div>
                    <div class="skills">
                        <li>
                            <!-- <h5>Java Script progress</h5> --><span class="bar"><span class="javascript"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image" style="background-image: url(img/php.jpg);"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">PHP<!-- <img src="css.png" alt=""> --></div>
                    <div class="card-content-text">Hier steht etwas über meine Erfahrung mit PHP</div>
                    <div class="skills">
                        <li>
                            <!-- <h5>PHP progress</h5> --><span class="bar"><span class="php"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image" style="background-image: url(img/csharp.jpg);"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">C#<!-- <img src="csharp.png" alt=""> --></div>
                    <div class="card-content-text">Hier steht etwas über meine Erfahrung mit C#</div>
                    <div class="skills">
                        <li>
                            <!-- <h5>C# progress</h5> --><span class="bar"><span class="csharp"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image" style="background-image: url(img/java.jpg);"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">Java<!-- <img src="csharp.png" alt=""> --></div>
                    <div class="card-content-text">Hier steht etwas über meine Erfahrung mit Java</div>
                    <div class="skills">
                        <li>
                            <!-- <h5>Java progress</h5> --><span class="bar"><span class="java"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image" style="background-image: url(img/c++.jpg);"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">C++<!-- <img src="csharp.png" alt=""> --></div>
                    <div class="card-content-text">Hier steht etwas über meine Erfahrung mit C++</div>
                    <div class="skills">
                        <li>
                            <!-- <h5>C++ progress</h5> --><span class="bar"><span class="cpp"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image" style="background-image: url(img/solidity.jpg);"></div> <!-- BILD ZU GROSS ALLES LAHM MUSS UMKONVERTIEREN -->
                <div class="card-content-wrapper">
                    <div class="card-content-logo">Solidity<!-- <img src="css.png" alt=""> --></div>
                    <div class="card-content-text">Hier steht etwas über meine Erfahrung mit Solidity</div>
                    <div class="skills">
                        <li>
                            <!-- <h5>Solidity progress</h5> --><span class="bar"><span class="solidity"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
            <div class="portfolio-card-wrapper">
                <div class="portfolio-card-image" style="background-image: url(img/keyboard.jpg);"></div>
                <div class="card-content-wrapper">
                    <div class="card-content-logo">Python<!-- <img src="css.png" alt=""> --></div>
                    <div class="card-content-text">Hier steht etwas über meine Erfahrung mit Python</div>
                    <div class="skills">
                        <li>
                            <!-- <h5>Python progress</h5> --><span class="bar"><span class="python"></span></span>
                        </li> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-Form -->
    <section class="contact-form">
        <div class="contact-form-wrapper">
            <div class="cf-input-fields">
                <input type="text" class="input" placeholder="Name">
                <input type="text" class="input" placeholder="Email">
                <input type="text" class="input" placeholder="Tel.">
            </div>
            <div class="cf-msg">
                <textarea placeholder="Nachricht"></textarea>
                <div class="cf-btn input">Abschicken</div>
            </div>
            
        </div>
    </section>
</main>

<?php
require('footer.php');
?>
</body>
