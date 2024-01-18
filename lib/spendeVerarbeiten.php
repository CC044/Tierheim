<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spendenstatus | Pfotenfreunde Trier</title>
    <link href="../web/css/style.css" rel="stylesheet" type="text/css">
    <link href="../web/css/spendeVerarbeiten.css" rel="stylesheet" type="text/css">
    <link rel="alternate icon" type="image/svg" href="../web/img/favicon.svg">
    <script defer src="../web/scripts/navigation.js"></script>
  </head>
  <body>
    <?php
      include_once ("../inc/headerNav.inc.php");
    ?>

    <main id="main">

    <?php
      //Formulareingaben bereinigen
      $vorname = $nachname = $betrag = $zeitintervall = $iban = '';

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
  
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $vorname = test_input($_POST["vorname"]);
        $nachname = test_input($_POST["nachname"]);
        $betrag = test_input($_POST["betrag"]);
    
        switch ($_POST["zeitintervall"]) {
         case "einmalig": $zeitintervall = "einmalige Spende";
         break;
          case "monatlich": $zeitintervall = "monatliche Spende";
          break;
          case "jaehrlich": $zeitintervall = "jaehrliche Spende";
          break;
        }

        $iban = test_input($_POST["iban"]);

        $kreditinstitut = test_input($_POST["institut"]);    
      }

      //Spendenbenachrichtigung
      echo "<h1>Spende erfolgreich abgeschickt!</h1>";

      $Spendeninfo = "<p id='nachricht'>"."Liebe/r $vorname $nachname,"."<br>"."vielen Dank für deine $zeitintervall. Es wurden $betrag € von deinem Konto bei der $kreditinstitut abgebucht."."</p>";

      echo $Spendeninfo;

      //bisherige Spender in jeweilige Datei schreiben
      if($zeitintervall == "einmalige Spende"){
        $filename = "topSpender.txt";
      } else if($zeitintervall == "monatliche Spende"){
        $filename = "topSpenderMonatlich.txt";
      } else if($zeitintervall == "jaehrliche Spende"){
        $filename = "topSpenderJaehrlich.txt";
      }
  
      $file = fopen($filename, "a");
      $file_content = $vorname." ".$nachname." ". $betrag."\n";
  
      if($file){
        fwrite($file, $file_content);
      } else {
        echo "Error: File not open";
      }

      fclose($file);

      //auslesen der Top-Spender Hilfsfunktion
      function readTopSpender($fileRead, $topDonator){

        if($fileRead){
          while(!feof($fileRead)){
            $line = fgets($fileRead);
            if(strlen(trim($line)) != 0){
              $currentDonator = explode(" ", $line);
              $topBetrag = 0;

              // Überprüfung ob der Spender schon vorhanden ist
              if(array_key_exists($currentDonator[0] . " " . $currentDonator[1], $topDonator)){
                $topBetrag = $topDonator[$currentDonator[0] . " " . $currentDonator[1]];
              }          

              // Überprüfung ob der der aktuelle Betrag der höchste der bereits vorhandenen ist
              if($topBetrag < $currentDonator[count($currentDonator)-1]){
                $topBetrag = $currentDonator[count($currentDonator)-1];
              }
        
              $topDonator[$currentDonator[0] . " " . $currentDonator[1]] = $topBetrag;
            } 
          }
        } else {
          echo "Error: File not open";
        }

        fclose($fileRead);
        return $topDonator;
      }

      // auslesen der einmaligen Top-Spender
      $fileRead = fopen("topSpender.txt", "r");
      $topDonatorEinmalig = array();
      
      $topDonatorEinmalig = readTopSpender($fileRead, $topDonatorEinmalig);
      arsort($topDonatorEinmalig);

      echo '<h1>Top Spender für die einmalige Spende</h1>';

      foreach($topDonatorEinmalig as $key => $value){
        if(strlen($key) != 0){
          echo '<div class="spender">Name: ' . $key . ', Betrag: ' . $value . '€</div>';
        }
      }

      // auslesen der monatlichen Top-Spender
      $fileRead = fopen("topSpenderMonatlich.txt", "r");
      $topDonatorMonatlich = array();

      $topDonatorMonatlich = readTopSpender($fileRead, $topDonatorMonatlich);
      arsort($topDonatorMonatlich);
  
      echo '<h1>Top Spender für die monatliche Spende</h1>';

      foreach($topDonatorMonatlich as $key => $value){
        if(strlen($key) != 0){
          echo '<div class="spender">Name: ' . $key . ', Betrag: ' . $value . '€</div>';
        }
      }

      // auslesen der jährlichen Top-Spender
      $fileRead = fopen("topSpenderJaehrlich.txt", "r");
      $topDonatorJaehrlich = array();

      $topDonatorJaehrlich = readTopSpender($fileRead, $topDonatorJaehrlich);
      arsort($topDonatorJaehrlich);;

      echo '<h1>Top Spender für die jährliche Spende</h1>';

      if(count($topDonatorJaehrlich) != 0){
        foreach($topDonatorJaehrlich as $key => $value){
          if(strlen($key) != 0){
            echo '<div class="spender">Name: ' . $key . ', Betrag: ' . $value . '€</div>';
          }
        }
      } else {
        echo "<p>Leider noch keine Spenden vorhanden!</p>";
      }
  
      echo '<div id="link"><a class="btn" href="../web/spenden.php">Zurück zur Spendenseite</a></div>';
    ?>

    </main>
    
    <?php
      include_once ("../inc/footer.inc.php");
    ?>
  </body>
</html>
