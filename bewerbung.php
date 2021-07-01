<?php
  require('header.php');
  $heute =  date("d.m.Y");
?>

<main>
  <section class="kopfzeile centered">
    <!-- meine adresse + daten(email,tel) -->
    <div class="wrapper-kopfzeile">
      <div class="application-my-data">
        Alexandr Iampolskaia <br/>
        Zobeltitzstraße 21 <br/>
        13403 Berlin <br/>
        
        E-Mail: <a href= "mailto:Alexandr.Iampolskaia@gmail.com">Alexandr.Iampolskaia@gmail.com</a><br/>
        Tel. +49 151 505 010 02 <br/><br/><br/><br/>
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
          print_r($row['companyplz'].' ');

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
  <?php 
    switch($_COOKIE["lang"]) {
      case 'DE': require("bewerbungTextDE.php");
      break;
      case 'EN': require("bewerbungTextEN.php");
      break;
    };
  ?>

  </section>
</main>

<?php
require('footer.php');
?>
