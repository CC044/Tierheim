<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakt | Pfotenfreunde Trier</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/kontakt.css" rel="stylesheet" type="text/css">
    <link rel="alternate icon" type="image/svg" href="img/favicon.svg">
    <script defer src="scripts/navigation.js"></script>
    <script defer src="scripts/kontakt.js"></script>
  </head>
  <body>
    <?php
      include_once ("../inc/headerNav.inc.php");
    ?>

    <main id="main">
      <!-- Kontaktformular -->
      <section id="kontaktFormular">
        <div id="heading">
          <h1>Kontaktformular</h1>
        </div>
        <aside id=formAndBtn>
          <form action="lib/bewerbungVerarbeitung2.php" method="post" autocomplete="on">

          <label for="Vorname">Vorname:</label><br>
          <input type="text" id="Vorname" name="Vorname" autocomplete="on" required placeholder="Vorname"><br>

          <label for="Nachname">Nachname:</label><br>
          <input type="text" id="Nachname" name="Nachname" autocomplete="on" required placeholder="Nachname"><br>

          <label for="email">E-Mail:</label><br>
          <input type="email" id="email" name="email" autocomplete="on" required placeholder="beispiel@email.de"><br>

          <label for="nachricht">Ihre Nachricht:</label><br>
          <textarea id="nachricht" name="nachricht" placeholder="Schreiben Sie uns gerne ihr Anliegen..."></textarea>

          </form>

          <button class="btn" id="kontaktAbschicken">Nachricht senden</button>
        </aside> 
      </section>
      <!-- Kontaktinformationen -->
      <section id="kontakt">
        <!-- oberer Infobereich -->
        <article id="kontaktTop">
          <figure>
            <img src="img/mitarbeiter/mitarbeiter4.jpg" alt="Bild von Julia Müller">
          </figure>
          <p>
            <strong>Julia Müller</strong> <br>
            Sekretariat
          </p>
          <p>
            <strong>Kontaktdaten</strong> <br>
            Tel.: <a href="tel:+496131487364">06131 - 48 73 64</a> <br>
            E-Mail: <a href="mailto:kontakt&#65312;tierheimtrier.de">kontakt&#65312;tierheimtrier.de</a> <br>
          </p>
        </article>

        <!-- unterer Infobereich -->
        <article id="kontaktBottom">
          <div>
            <img src="img/favicon.svg" alt="Logo von Pfotenfreunde Trier">
            <h1>Pfotenfreunde Trier</h1>
          </div> 
          <p>
            Berlinerstraße 4 / 54290 Trier <br>
            Tel.: <a href="tel:+496131487364">06131 - 48 73 64</a> <br>
            E-Mail: <a href="mailto:kontakt&#65312;tierheimtrier.de">kontakt&#65312;tierheimtrier.de</a> <br> 
          </p>
          <p>
            <strong>Öffnungszeiten:</strong> <br> 
            Montag bis Freitag: 08:00 - 18:00 Uhr <br>
            Samstag und Sonntag geschlossen <br>
          </p>
          <p>
            <strong>Vermittlungszeiten:</strong> <br> 
            Montag, Mittwoch und Freitag: 10:00 - 16:00 Uhr <br>
            Wir empfehlen Ihnen einen persönlichen Termin <br>
            über unser <a href="tierabgabe.php">Vermittlungsformular</a> zu vereinbaren. <br>
          </p>        
        </article>
      </section>
    </main>
    
    <?php
      include_once ("../inc/footer.inc.php");
    ?>
  </body>
</html>