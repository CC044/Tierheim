<?php
  // currentPageUrl wird für die Validatoren verwendet
  $reqURI = htmlspecialchars($_SERVER["REQUEST_URI"]);
  $currentPageUrl = "https://" . $_SERVER["HTTP_HOST"] . $reqURI;
  // echo "URI lautet: " . $currentPageUrl;

  $currentPageUrl = urlencode($currentPageUrl);

  // Überprüfe, ob die aktuelle Datei im "lib"-Ordner liegt
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
  if (@$_ENV["PROJECTINPROD"] === "true") {
    echo <<<HTMLB
        \n<p><a href="https://validator.w3.org/nu/?doc={$currentPageUrl}" target="_blank" rel="noopener"><img src="{$webPath}img/w3/valid-html401-blue.png" alt="HTML validieren"></a></p>
        <p><a href="https://jigsaw.w3.org/css-validator/validator?uri={$currentPageUrl}" target="_blank" rel="noopener"><img src="{$webPath}img/w3/valid-css-blue.png" alt="CSS validieren"></a></p>
        <p><a href="https://wave.webaim.org/report#/{$currentPageUrl}" target="_blank" rel="noopener"><img src="{$webPath}img/w3/wavelogo.svg" class="wavebtn" alt="Barrierefreiheit validieren"></a></p>
    HTMLB;
  }

  echo "</footer>\n"
?>
