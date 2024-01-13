<?php
$tierNamen = array('Bello', 'Vasko', 'Cora', 'Bella', 'Keno', 'Kira', 'Luna', 'Kiki', 'Freya', 'Nero');

$tierGroessen = array('Klein', 'Mittel', 'Groß');

$tierVorlieben = array('Auto fahren', 'Schlafen', 'Kuscheln', 'Spazieren', 'Rennen', 'Verstecken', 'Schnüffeln', 'Schwimmen', 'Ball holen', 'Spielen', 'Erkunden');

$tierAbneigungen = array('Hunger', 'Einsamkeit', 'Baden', 'Hundeleinen', 'Lärm', 'Laute Musik', 'Regenschirme', 'Staubsauger', 'Schokolade');

/** 
 * Gibt eine verkürzte Attribut Liste für Tierkarten zurück.
 *
 * @param array $longArr Gesamte Auswahl an verfügbaren Attributen
 * @param int $maxAnzahl Gewünschte maximal Anzahl an Attributen
 * @var int $maxAttr Begrenzung der Anzahl an Attributen auf maximal verfügbare
 * @var int $randAnzahl Zufällige Anzahl an Attributen (begrenzt durch maximal verfügbare)
 * @var array $chosenAttr Indizes mit generierte(n/m) Attribut(en)
 * @var string $shortArrResult Hilfsarray mit generierten Attributen
 * @return string Eine kurze Liste mit Attributen
*/
// getAttributes: Input > Randomize & Short-Array > String
function getAttributes($longArr, $maxAnzahl = 1) {
  $maxAttr = min($maxAnzahl, count($longArr) - 1);
  $randAnzahl = mt_rand(1, $maxAttr);
  $chosenAttr = array_rand($longArr, $randAnzahl); // indizes, kein Array!
  
  // einzelner String oder Array ausgeben
  if (is_array($chosenAttr)) {
      foreach ($chosenAttr as $index) {
          $shortArrResult[] = $longArr[$index];
      }
      $result = implode(' ', $shortArrResult);
  } else {
    $result = $longArr[$chosenAttr];
  }
  return $result;
}

/** 
 * Liste mit Dateinamen verfügbarer Bilder anfertigen
 *
 * @param string $tierArt Tierart / Tierkategorie
 * @var string $bildVerzeichnis Pfad des Bilder-Verzeichnis
 * @var array $bildDateien Liste aller Dateinamen (mit . und ..) im Bilder-Verzeichnis lesen
 * @var array $bilder Liste mit Dateinamen der Bilder
 * @return array $bilder Liste mit Dateinamen der Bilder
*/
function getImages($tierArt = 'hunde') {
  try {
    if (!$tierArt or (!in_array($tierArt, ['hunde', 'katzen', 'kleintiere']))) {
      throw new Exception("Tierkategorie fehlt oder unbekannt. Zeige daher Hunde.");
      $bildVerzeichnis = 'img/tiere/hunde/'; // Standard Tierart setzen
    } else {
      $bildVerzeichnis = 'img/tiere/' . $tierArt . "/";
    }
    if (!is_dir($bildVerzeichnis)) {
        echo "<br>\$bildVerzeichnis ist fehlerhaft: ";
        var_dump($bildVerzeichnis);
        throw new Exception("Für " . $tierArt . " fehlerhaftes Verzeichnis oder Pfad" . $bildVerzeichnis);
    }
    $bildDateien = scandir($bildVerzeichnis);
    if ($bildDateien === false) {
      echo "<br>\$bildVerzeichnis ist fehlerhaft: ";
      var_dump($bildVerzeichnis);
      throw new Exception("Fehler beim Lesen des Bilderverzeichnisses für " . $tierArt);
    }

    // Entferne . und .. (aktuelles Verz und oberes Verz)
    $bilder = array_slice($bildDateien, 2);
    /* zufälliges Bild auswaehlen
    // $bild = $bildDateienShort[array_rand($bildDateienShort)]; */

    return $bilder;

  } catch (Exception $e) {
    echo "Fehler in getImages(): " . $e->getMessage();
  }
}

/** 
 * Dateipfad zu einem zufälligen Bild anfertigen
 *
 * @param string $tierArt Tierart
 * @var string $bilderDateiNamen Liste mit Dateinamen von Bilder
 * @var string $bild Ein einziges zufällig ausgewähltes Bild
 * @return string $name Dateipfad zum Bild
*/
function getSingleImage($tierArt = 'hunde') {
  try {
    if (!$tierArt or (!in_array($tierArt, ['hunde', 'katzen', 'kleintiere']))) {
      throw new Exception("Tierkategorie fehlt oder unbekannt. Zeige daher Hunde.");
    }
    $bilderDateiNamen = getImages($tierArt);
    $bild = $bilderDateiNamen[array_rand($bilderDateiNamen)];
  } catch (Exception $e) {
    echo "Fehler in getSingleImage(): " . $e->getMessage();
  }
  return $bild;
}


// printCards(7, $_GET['kategorie'], $tierNamen, $tierGroessen, $tierVorlieben, $tierAbneigungen);
/** 
 * HTML-Code für Tierkarten generieren
 *
 * @param int $anzahlCards Anzahl der zu generierenden Tierkarten
 * @param string $tierArt [hunde, katzen, kleintiere] Tierart
 * @param string $tierNamen Tiernamen
 * @param string $tierGroessen [klein, mittel, groß] Tiergrößen
 * @param string $tierVorlieben Tiervorlieben
 * @param string $tierAbneigungen Tierabneigungen
 * [@param array $tierBeschreibung Tierbeschreibung]
 *
 * [@var string $tierRasse Tierrasse]
 * @var string $tierAlter Tieralter
 * @var string $tierBild URI eines einzigen Bildes eines Tieres
 * @var string $vorlage HTML-Code-Vorlage in die die Attribute geschrieben werden
*/
function printCards ($anzahlCards, $tierArt, $tierNamen, $tierGroessen, $tierVorlieben, $tierAbneigungen) {
  $anzahlCards = min($anzahlCards, 50); // max. 50 Cards
  for ($i=0; $i < $anzahlCards; $i++) {
    $tierName = getAttributes($tierNamen, 1);
    $tierBild = getSingleImage($tierArt);
    // $tierRasse = getAttributes($tierRassen);
    $tierAlter = rand(6, 12);
    $tierGroesse = getAttributes($tierGroessen, 1);
    $tierVorliebe = getAttributes($tierVorlieben, 3);
    $tierAbneigung = getAttributes($tierAbneigungen, 3);
    $tierBeschreibung = 'Beschreibung von ' . $tierName;

    $vorlage = <<<HTML
    <li>
      <section class="card" id="$i">
        <div class="cardBild">
          <img id="animalImg_$i" src="img/tiere/$tierArt/$tierBild" alt="Bild von $tierName" >
        </div>
        <div class="cardText">
          <h2 id="animalName_$i">$tierName</h2>
          <ul class="cardAttribute">
            <li>Alter: $tierAlter Jahre</li>
            <li>Größe: $tierGroesse</li>
            <li>Vorlieben: $tierVorliebe</li>
            <li>Abneigungen: $tierAbneigung</li>
          </ul>
          <p>$tierBeschreibung</p>
        </div>
        <div class="cardButtons">
          <!-- - - ><button class="btn" id="adoptBtn_$i">Adoptieren für $tierName</button>
          <button class="btn" id="giftBtn_$i">Sachspende für $tierName</button>
          <button class="btn" id="sponsorBtn_$i">Patenschaft für $tierName</button>< ! - - -->
          <a href="../lib/tierUnterstuetzen.php?name=$tierName&spendeAktion=adoptieren" class="adoptieren btn">Adoptieren</a>
          <a href="../lib/tierUnterstuetzen.php?name=$tierName&spendeAktion=sachspende" class="sachspende btn">Sachspende</a>
          <a href="../lib/tierUnterstuetzen.php?name=$tierName&spendeAktion=patenschaft" class="patenschaft btn">Patenschaft</a>
        </div>
      </section>
    </li>
    HTML;
    
    echo $vorlage;
  }
}
?>
