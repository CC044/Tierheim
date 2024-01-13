<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tier-Unterstützung | Pfotenfreunde Trier</title>
    <link href="../web/css/style.css" rel="stylesheet" type="text/css">
    <link rel="alternate icon" type="image/svg" href="../web/img/favicon.svg">
    <script defer src="../web/scripts/navigation.js"></script>
  </head>
  <body>
    <?php
      include_once ("../inc/headerNav.inc.php");
    ?>

    <main id="main">
      <?php
      /** 
       * Zeigt den Status der Funktion Tier-Unterstützung an.
       *
       * @param string $name ** Name des Tieres
       * @param string $spendeAktion [adoptieren, sachspende, patenschaft] ** Typ der Aktion
       * @var string $tierNamen ** Tiername
       * @var string $spendeAktion ** Typ der Aktion
       * @var string $text ** Text abhaengig von der Aktion
      */
      try {
        if (!isset($_GET['name']) || !isset($_GET['spendeAktion'])) {
          throw new Exception("Angegebener Get-Parameter \"Name\" oder \"Spenden-Aktion\" fehlt");
        }
        $tierName = htmlspecialchars($_GET['name']);
        $spendeAktion = htmlspecialchars($_GET['spendeAktion']);
        $text = "";
  
        echo "<h1>Danke, dass Du " . $tierName . " unterstützt.</h1>";
        
        switch ($spendeAktion) {
          case "adoptieren":
            $text = " ist nun Dein Haustier. Herzlichen Glückwunsch!";
            echo $tierName . $text;
            break;
          case "sachspende":
            $text = " dankt Dir für deine Spende!";
            echo $tierName . $text;
            break;
          case "patenschaft":
            $text = " dankt Dir für deine Patenschaft! Besuche uns während unserer Öffnungszeiten: <br>";
            echo $tierName . $text;
            break;
          default:
            echo "<h1>Technischer Fehler</h1>";
            echo "<p>Es wurde keine korrekte Aktion ausgewählt.</p>";
            throw new Exception("Angegebener Wert von Get-Parameter \"Spenden-Aktion\" unbekannt.");
            break;
        }
      } catch (Exception $e) {
        $errorMessage = $e->getMessage();
        echo '<p>Fehlerhafte Anfrage' . htmlspecialchars($errorMessage) . "</p>";
      }
      ?>
      <p>
        Besuche uns während unserer Öffnungszeiten: <br>
        Montag, Dienstag, Mittwoch, Donnerstag, Freitag, Samstag von 10:00 bis 18:00 <br>
        zur Abwicklung.
      </p>
    </main>
    <?php
      include_once ("../inc/footer.inc.php");
    ?>
  </body>
</html>
