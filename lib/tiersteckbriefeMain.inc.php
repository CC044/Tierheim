<?php
include_once ("animalCards.php");

/** 
 * Generiert HTML Code für Tierkarten.
 *
 * @param string $kategorie [hund, katze, kleintier] ** Tierart nach der gefiltert wird
 * @func array printCards() siehe lib/animalCards.php ** generiert Tierkarten
*/
echo "<main id=\"main\">";
echo "<ul class=\"cardUebersicht\" id=\"cardUebersicht\">";
  try {
    if (isset($_GET['kategorie'])) {
      $kategorie = $_GET['kategorie'];
      $kategorie = htmlspecialchars($kategorie);
      
      switch ($kategorie) {
        case 'hunde':
          printCards(10, $kategorie, $tierNamen, $tierGroessen, $tierVorlieben, $tierAbneigungen);
          break;
        case 'katzen':
          printCards(7, $kategorie, $tierNamen, $tierGroessen, $tierVorlieben, $tierAbneigungen);
          break;
        case 'kleintiere':
          printCards(6, $kategorie, $tierNamen, $tierGroessen, $tierVorlieben, $tierAbneigungen);
          break;
        default:
          throw new Exception("Angegebener Get-Parameter \"Kategorie\" unbekannt");
          break;
      }
    } else {
      throw new Exception("Get-Parameter \"Kategorie\" fehlt");
    }
  } catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo '<p>Fehlerhafte Anfrage' . htmlspecialchars($errorMessage) . "</p>";
  }

  echo "</ul>";
  echo "</main>";
?>
