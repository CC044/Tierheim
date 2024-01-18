<?php
  // currentPageUrl wird für die Validatoren verwendet
  $reqURI = htmlspecialchars($_SERVER["REQUEST_URI"]);
  $currentPageUrl = "https://" . $_SERVER["HTTP_HOST"] . $reqURI;
  // echo "URI lautet: " . $currentPageUrl;

  $currentPageUrl = urlencode($currentPageUrl);

  // Ueberpruefe, ob aktuelle Datei im "lib"-Ordner liegt zur Realisierung der relativen Pfade
  if (strpos(getcwd(), "lib") == true) {
    $webPath = "../web/";
  } else {
    $webPath = "";
  }


  echo <<<HTMLA
    <footer>
      <p><a href="{$webPath}kontakt.php">Kontakt</a></p>
      <!--<p><a href="{$webPath}impressum.php">Impressum</a></p>-->
      <!--<p><a href="" target="_blank" rel="noopener">WeitererEintrag</a></p>-->
  HTMLA;

  /**
   * @var $currentPageUrl
   * @var $PROJECTINPROD
   * Environment-Variable
   *
   * In der finallen Abgabe werden die drei Test-Button ausgeblendet, da
   * der Pfad fuer diese ohnehin nicht funktionieren wuerden
   * (localhost statt echter domain)
   * Die Entwicklungsumgebung funktioniert mit der temp domain von
   * Replit.com. Auf diese Weise muessen wir die Buttons nicht entfernen und
   * die Abgabe wird nicht veraendert.
   *
   * Wenn die Variable auf true gesetzt ist, werden die Buttons eingeblendet.
  */
    
  if (@$_ENV["PROJECTINPROD"] === "true") {
    echo <<<HTMLB
        \n<p><a href="https://validator.w3.org/nu/?doc={$currentPageUrl}" target="_blank" rel="noopener"><img src="{$webPath}img/w3/valid-html401-blue.png" alt="HTML validieren"></a></p>
        <p><a href="https://jigsaw.w3.org/css-validator/validator?uri={$currentPageUrl}" target="_blank" rel="noopener"><img src="{$webPath}img/w3/valid-css-blue.png" alt="CSS validieren"></a></p>
        <p><a href="https://wave.webaim.org/report#/{$currentPageUrl}" target="_blank" rel="noopener"><img src="{$webPath}img/w3/wavelogo.svg" class="wavebtn" alt="Barrierefreiheit validieren"></a></p>
    HTMLB;
  }

  echo "</footer>\n"
?>
