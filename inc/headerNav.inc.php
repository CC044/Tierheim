<?php

  // Überprüfe, ob die aktuelle Datei im "lib"-Ordner liegt
  if (strpos(getcwd(), "lib") == true) {
    $webPath = "../web/";
  } else {
    $webPath = "";
  }

  // Header und Navigationsleiste rendern
  echo <<<HTML
    <header>
      <a href="{$webPath}index.php">
        <img src="{$webPath}img/favicon.svg" alt="Logo von Pfotenfreunde Trier">
        <h1>Pfotenfreunde Trier</h1>
      </a>
    </header>
    <nav>
      <ul class="topmenu">
        <li id="index.php"><a href="{$webPath}index.php">Startseite</a></li>
        <li id="tiersteckbriefe.php"><a href="#">Tiersteckbriefe…</a>
          <button id="tiersteckSubBtn" title="Untermenü öffnen oder schließen" type="button"></button><label id="labelSub" for="tiersteckSubBtn" title="Untermenü öffnen oder schließen">⮟</label>
          <!-- https://www.w3schools.com/charsets/ref_utf_arrows.asp -->
          <ul id="submenu" class="submenu" aria-expanded="false">
            <li><a href="{$webPath}tiersteckbriefe.php?kategorie=hunde">Hunde</a></li>
            <li><a href="{$webPath}tiersteckbriefe.php?kategorie=katzen">Katzen</a></li>
            <li><a href="{$webPath}tiersteckbriefe.php?kategorie=kleintiere">Kleintiere</a></li>
          </ul>
        </li>
        <li id="tierabgabe.php"><a href="{$webPath}tierabgabe.php">Tierabgabe</a></li>
        <li id="spenden.php"><a href="{$webPath}spenden.php">Spenden</a></li>
        <li id="mitarbeiter.php"><a href="{$webPath}mitarbeiter.php">Mitarbeiter</a></li>
        <li id="stellenausschreibungen.php"><a href="{$webPath}stellenausschreibungen.php">Stellenausschreibungen</a></li>
      </ul>
    </nav>
  HTML;
  
  // Breadcrumbs //
  $pageURI = $_SERVER['REQUEST_URI'];
  $pageName = pathinfo($pageURI, PATHINFO_FILENAME);
  
  // parameter pruefen
  if (!empty($_GET)) {
      switch (true) {
          case isset($_GET['kategorie']):
              $kategorie = $_GET['kategorie'];
              $kategorie = htmlspecialchars($kategorie);
              echo "<div class=\"breadcrumb\"><a href=\"{$webPath}index.php\">Start</a> ⮞ Tiersteckbriefe ⮞ " . ucfirst($kategorie) . "</div>";
              break;
          case isset($_GET['weitere_parameter_hier_abfangen']):
              break;
          default:
              // Hier unbekannte Parameter abfangen
              break;
      }
  } else {
      // Keine GET parameter vorhanden
      switch ($pageName) {
          // Ausblenden auf der Startseite
          case "index":
          case "":
              break;
          case "spendeVerarbeiten";
              echo "<div class=\"breadcrumb\"><a href=\"{$webPath}index.php\">Start</a> ⮞ <a href=\"{$webPath}spenden.php\">Spenden</a> ⮞ Spendenstatus</div>";
              break;
          default:
              echo "<div class=\"breadcrumb\"><a href=\"{$webPath}index.php\">Start</a> ⮞ " . ucfirst($pageName) . "</div>";
              break;
      }
  }
  
?>
