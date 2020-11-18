<?php
  require('header.php');
  $heute =  date("d.m.Y");
?>

<main>
  <section class="kopfzeile centered">
    <!-- meine adresse + daten(email,tel) -->
    <div class="wrapper-kopfzeile">
      <div class="application-my-data">
        Max Mustermann <br/>
        Musterstr. 11 <br/>
        11111 Berlin <br/>
        E-Mail: MaxMustermann@Max.de <br/>
        Tel. +1231231231 <br/><br/><br/><br/>
      </div>
      <!-- bewerbungsfoto -->
      <div class="application-photo">
        <img src="img\face.jpg" alt="">
      </div>
      <!-- daten vom unternehmen (adresse, ansprechsperson usw.) -->
      <div class="application-company-details">
        <?php
          require("mysql.php");     
          $username = $_SESSION['username'];
          $stmt = $mysql->prepare("SELECT company FROM user WHERE username = '$username'");
          $stmt->execute();
          $row = $stmt->fetch();
          print_r($row['company']);
        ?>
          <br>
        <?php
          require("mysql.php");
          $username = $_SESSION['username'];
          $stmt = $mysql->prepare("SELECT companystreet FROM user WHERE username = '$username'");
          $stmt->execute();
          $row = $stmt->fetch();
          print_r($row['companystreet']);
        ?>
        <br>
        <?php
          require("mysql.php");
          $username = $_SESSION['username'];
          $stmt = $mysql->prepare("SELECT companyplz FROM user WHERE username = '$username'");
          $stmt->execute();
          $row = $stmt->fetch();
          print_r($row['companyplz']);

          require("mysql.php");
          $username = $_SESSION['username'];
          $stmt = $mysql->prepare("SELECT companycity FROM user WHERE username = '$username'");
          $stmt->execute();
          $row = $stmt->fetch();
          print_r($row['companycity']);
        ?>
      </div>
      <!-- datum -->
        <div class="application-datum"> <?php echo $heute; ?> </div>
    </div>
  </section>

  
  <section class="letter_content centered">
    <h3>Bewerbung für ein Praktikum als Fachinformatiker für Anwendungsentwicklung</h3><br/><br/><br/>
    <p>
      <?php
        require("mysql.php");
        $username = $_SESSION['username'];
        $stmt = $mysql->prepare("SELECT anrede FROM user WHERE username = '$username'");
        $stmt->execute();
        $row = $stmt->fetch();
        print_r($row['anrede']);
      ?>
      <br/>
      <p>ich würde sehr gerne ein Praktikum als Fachinformatiker für Anwendungsentwicklung, in Ihrem  Betrieb absolvieren.</p>
      <p>Seit August 2019 nehme ich, beim Forum Berufsbildung Berlin e.V., an einer Umschulung zum Fachinformatiker für Anwendungsentwicklung teil.</p>
      <p>Die Umschulung dauert zwei Jahre und bereichert mein persönliches Interesse mit technischer Fachkompetenz. Ich interessiere mich für mobile Webanwendungen, Datenbanken und Automatisierung. Als Quereinsteiger bereue ich sehr, dass ich nicht schon früher angefangen habe mich mit Programmiersprachen zu beschäftigen.</p>
      <br>
      <p>Da ich sehr früh im Leben lernen musste auf eigenen Beinen zu stehen, gehören  selbstständiges Arbeiten und logisches Denken zu meinen Stärken. Ich bin belastbar und habe kein Problem damit unter Druck zu arbeiten. Das konnte ich während meiner Tätigkeit in Russland als selbstständiger Unternehmer, sowie als Vertreter für einen Erstligaverein in der russischen Republik Dagestan unter Beweis stellen.</p>
      <p>Mein Arbeitsstil ist gründlich, zielstrebig und qualitätsbewusst. Das wurde mir von meinem  bisherigen Arbeitgebern bestätigt. Termintreue und verbindliches Arbeiten sind mir wirklich wichtig.</p> 
      <br>
      <p>Mein Sprachprofil umfasst Deutsch, Englisch und Russisch mündlich, schriftlich und verhandlungssicher. In meiner Freizeit mache ich Sport und gebe ich Nachhilfe in Deutsch für russische Kinder.</p>
      <p>Das Praktikum würde ich ab sofort beginnen können. Dabei stehe ich Ihnen bis zum 28. August 2020 täglich zu Verfügung (Montag bis Freitag) und ab dem 31. August 2020 bis zum 12. Mai 2021 nur von Montag bis Mittwoch, da ich in diesem Zeitraum jeweils am Donnerstag und Freitag am Fachunterricht in der Schule teilnehmen muss.</p>
      <p>Ich freue mich sehr über eine Einladung zu einem persönlichem Gespräch.</p>
      <br>
      <p>Mit freundlichen Grüßen</p>
      <br>
      <p>Alexandr Iamoplskaia</p>
    
  </section>
</div>
</main>

<?php
require('footer.php');
?>
