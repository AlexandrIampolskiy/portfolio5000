<h3>Bewerbung um einen Praktikumsplatz als Fachinformatiker für Anwendungsentwicklung</h3>
<br/>
<br/>
<br/>

<?php
    require("mysql.php");
    $username = $_SESSION['username'];
    $stmt = $mysql->prepare("SELECT anrede FROM user WHERE username = '$username'");
    $stmt->execute();
    $row = $stmt->fetch();
    print_r($row['anrede'])
?>
<br/>
<br/>
<p>ich würde sehr gerne ein sechsmonatiges Praktikum als Fachinformatiker für Anwendungsentwicklung bei Ihnen im Unternehmen absolvieren. Das Praktikum würde ich ab dem 22 November 2021 beginnen können.</p>
<br>
<p>Seit August 2020 nehme ich bei Damago GmbH in Berlin an einer Umschulung zum Fachinformatiker für Anwendungsentwicklung teil.</p>
<p>Die Umschulung dauert zwei Jahre, macht mir sehr viel Spaß und bereichert mein persönliches Interesse mit technischer Kompetenz.</p>
<p>Selbstständiges Arbeiten, Kreativität und logisches Denken gehören zu meinen Stärken. Ich bin belastbar und habe kein Problem damit unter Druck zu arbeiten.</p>
<br>
<p>Teamgeist, Termintreue und verbindliches Arbeiten sind mir wichtig. Mein Arbeitsstil ist gründlich, zielstrebig und qualitätsbewusst.</p> 
<p> Ich interessiere mich für mobile Webanwendungen, Datenbanken, Automatisierung und das Design bzw. die Architektur verschiedener „Back-End Lösungen“ für Web-Anwendungen.</p>
<br>
<p>Über eine positive Rückmeldung Ihrerseits, würde ich mich sehr freuen.</p>
<br>
<p>Mit freundlichen Grüßen</p>
<br>
<p>Alexandr Iamoplskaia</p>