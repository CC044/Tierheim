<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stellenausschreibungen | Pfotenfreunde Trier</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/stellenausschreibungen.css" rel="stylesheet" type="text/css">
    <link rel="alternate icon" type="image/svg" href="img/favicon.svg">
    <script defer src="scripts/navigation.js"></script>
  </head>
  <body>
    <?php
      include_once ("../inc/headerNav.inc.php");
    ?> 
    <main id="main">
      <h1>Stellenausschreibungen und Bewerbung</h1>
      <div class="flex">
        <article class="flexborder">
        <h2>Stellenausschreibung: Tierpfleger (m/w/d) Abteilung Hunde</h2>
        <p>Das Tierheim Pfotenfreunde Trier sucht qualifizierte Tierpflegerinnen und Tierpfleger für unsere Hundeabteilung. 
          Wenn Sie eine Leidenschaft für Hunde haben, über Erfahrung in der Tierpflege verfügen und die Herausforderungen in einem tierlieben Team annehmen möchten, dann könnte diese Position die perfekte Gelegenheit für Sie sein.</p>
        <h3>Aufgaben:</h3>
        <ul>
        <li> Betreuung, Fütterung und Pflege von Hunden in unserer Einrichtung<br></li>
        <li>  Durchführung von Spaziergängen und Aktivitäten zur Förderung der Bewegung<br></li>
        <li>  Pflege und Reinigung von Hundezwingern<br></li>
        <li>  Zusammenarbeit mit dem Team, um die Bedürfnisse der Hunde zu erfüllen<br></li>
        </ul>
        <h3>Anforderungen:</h3>
        <ul>
          <li> Erfahrung in der Hundepflege und -betreuung <br></li>
            <li> Empathie und Verständnis für das Verhalten von Hunden<br></li>
              <li> Belastbarkeit und Teamgeist<br></li>
                <li> Bereitschaft zur Wochenendarbeit im Rahmen eines festgelegten<br></li>
        </ul>
        <h3>Bewerbungsfrist: [12.3.2024]</h3>
        </article>
        <form action="../lib/bewerbungVerarbeitung.php" method="post" autocomplete="on">

    <label for="Vorname">Vorname:</label><br>
    <input type="text" id="Vorname" name="Vorname" required placeholder="Vorname"><br>
    <label for="Nachname">Nachname:</label><br>
    <input type="text" id="Nachname" name="Nachname" required placeholder="Nachname"><br>
    <label for="email">E-Mail:</label><br>
    <input type="email" id="email" name="email" required placeholder="beispiel@email.de"><br>
    <label for="Telefonnummer">Telefonnummer:</label><br>
    <input type="tel" id="Telefonnummer" name="Telefonnummer" pattern="[0-9]{10,14}" placeholder="0123456789"><br>
    <small>Bitte geben Sie eine gültige Telefonnummer ein (mindestens 10 Ziffern).</small><br>
    <label for="Handynummer">Handynummer:</label><br>
    <input type="tel" id="Handynummer" name="Handynummer" pattern="\+[0-9]{1,4}[0-9]{9,13}" placeholder="+491234567890"><br>
    <small>Bitte geben Sie eine gültige Handynummer ein (beginnend mit '+' gefolgt von Landesvorwahl und Nummer).</small><br>
    <label for="Erfahrung">Berufserfahrung (Jahre):</label><br>
    <input type="number" id="Erfahrung" name="Erfahrung" required><br>
    <label for="Nachricht">Nachricht:</label><br>
    <textarea id="Nachricht" name="Nachricht" rows="4"></textarea><br>
    <label for="Lebenslauf">Lebenslauf</label><br>
    <input type="file" id="Lebenslauf" name="Lebenslauf" required><br>
    <label for="Anschreiben">Anschreiben</label><br>
    <input type="file" id="Anschreiben" name="Anschreiben" required><br>
    <label for="Qualifikationen">Qualifikationen</label><br>
    <input type="file" id="Qualifikationen" name="Qualifikationen"><br>
    <input type="submit" class="btn" name="BewerbungAbschicken" value="Bewerbung abschicken">
      </form>
    </div>

   <!--die anderen 2-->
   <div class="flex">
    <article class="flexborder">
    <h2>Stellenausschreibung: Tierpfleger (m/w/d) Abteilung Katzen</h2>
    <p>Das Tierheim Pfotenfreunde Trier sucht engagierte Tierpflegerinnen und Tierpfleger für unsere Katzenabteilung.
       Wenn Sie eine Leidenschaft für Katzen haben, über Erfahrung in der Tierpflege verfügen und sich in einem dynamischen Team engagieren möchten, dann könnte diese Position die richtige für Sie sein.</p>
    <h3>Aufgaben:</h3>
    <ul>
    <li> Pflege, Fütterung und Betreuung von Katzen in unserer Einrichtung<br></li>
    <li>  Reinigung von Katzengehegen und Unterstützung bei der Schaffung einer sauberen Umgebung<br></li>
    <li>  Beobachtung des Verhaltens der Katzen und Berichterstattung an Vorgesetzte<br></li>
    <li>  Mitwirkung bei der Vermittlung von Katzen in liebevolle Zuhause<br></li>
    </ul>
    <h3>Anforderungen:</h3>
    <ul>
      <li> Erfahrung in der Tierpflege, insbesondere mit Katzen <br></li>
        <li> Liebevolle und respektvolle Einstellung gegenüber Tieren<br></li>
          <li> Teamfähigkeit und Zuverlässigkeit<br></li>
            <li> Bereitschaft zur Wochenendarbeit im Rahmen eines festgelegten Dienstplans<br></li>
    </ul>
    <h3>Bewerbungsfrist: [12.3.2024]</h3>
    </article>
    <form action="../lib/bewerbungVerarbeitung.php" method="post" autocomplete="on">

<label for="Vorname1">Vorname:</label><br>
<input type="text" id="Vorname1" name="Vorname1" required placeholder="Vorname"><br>

<label for="Nachname1">Nachname:</label><br>
<input type="text" id="Nachname1" name="Nachname1" required placeholder="Nachname"><br>

<label for="email1">E-Mail:</label><br>
<input type="email" id="email1" name="email1" required placeholder="beispiel@email.de"><br>

<label for="Telefonnummer1">Telefonnummer:</label><br>
<input type="tel" id="Telefonnummer1" name="Telefonnummer1" pattern="[0-9]{10,14}" placeholder="0123456789"><br>
<small>Bitte geben Sie eine gültige Telefonnummer ein (mindestens 10 Ziffern).</small><br>
<label for="Handynummer1">Handynummer:</label><br>
<input type="tel" id="Handynummer1" name="Handynummer1" pattern="\+[0-9]{1,4}[0-9]{9,13}" placeholder="+491234567890"><br>
<small>Bitte geben Sie eine gültige Handynummer ein (beginnend mit '+' gefolgt von Landesvorwahl und Nummer).</small><br>

<label for="Erfahrung1">Berufserfahrung (Jahre):</label><br>
<input type="number" id="Erfahrung1" name="Erfahrung1" required><br>

<label for="Nachricht1">Nachricht:</label><br>
<textarea id="Nachricht1" name="Nachricht1" rows="4"></textarea><br>

<label for="Lebenslauf1">Lebenslauf</label><br>
<input type="file" id="Lebenslauf1" name="Lebenslauf1" required><br>

<label for="Anschreiben1">Anschreiben</label><br>
<input type="file" id="Anschreiben1" name="Anschreiben1" required><br>

<label for="Qualifikationen1">Qualifikationen</label><br>
<input type="file" id="Qualifikationen1" name="Qualifikationen1"><br>

<input type="submit" class="btn" name="BewerbungAbschicken" value="Bewerbung abschicken">
  </form>
</div>
  <!---->
  <div class="flex">
    <article class="flexborder">
    <h2>Stellenausschreibung: Kundenbetreuer (m/w/d)</h2>
    <p>Das Tierheim Pfotenfreunde Trier sucht einen engagierten Kundenbetreuer zur Unterstützung unseres Teams. 
      Als Kundenbetreuer sind Sie die Schnittstelle zwischen dem Tierheim und potenziellen Tiereltern. 
      Wenn Sie Freude am Umgang mit Menschen und Tieren haben, kommunikativ sind und eine positive Einstellung mitbringen, möchten wir Sie gerne kennenlernen.</p>
    <h3>Aufgaben:</h3>
    <ul>
    <li> Beratung von Besuchern hinsichtlich Adoption und Tierpflege<br></li>
    <li>  Verwaltung von Vermittlungsunterlagen und Kundeninformationen<br></li>
    <li>  Organisation von Besichtigungen und Events im Tierheim<br></li>
    <li>  Kundenbetreuung vor und nach der Adoption<br></li>
    </ul>
    <h3>Anforderungen:</h3>
    <ul>
      <li> Ausgeprägte Kommunikationsfähigkeiten und freundliches Auftreten <br></li>
        <li> Erfahrung im Kundenservice oder in ähnlichen Bereichen<br></li>
          <li> Affinität zu Tieren und Verständnis für Tierpflege<br></li>
            <li> Teamfähigkeit und Flexibilität<br></li>
    </ul>
    <h3>Bewerbungsfrist: [12.3.2024]</h3>
    </article>
    <form action="../lib/bewerbungVerarbeitung.php" method="post" autocomplete="on">

<label for="Vorname2">Vorname:</label><br>
<input type="text" id="Vorname2" name="Vorname2" required placeholder="Vorname"><br>

<label for="Nachname2">Nachname:</label><br>
<input type="text" id="Nachname2" name="Nachname2" required placeholder="Nachname"><br>

<label for="email2">E-Mail:</label><br>
<input type="email" id="email2" name="email2" required placeholder="beispiel@email.de"><br>

<label for="Telefonnummer2">Telefonnummer:</label><br>
<input type="tel" id="Telefonnummer2" name="Telefonnummer2" pattern="[0-9]{10,14}" placeholder="0123456789"><br>
<small>Bitte geben Sie eine gültige Telefonnummer ein (mindestens 10 Ziffern).</small><br>
<label for="Handynummer2">Handynummer:</label><br>
<input type="tel" id="Handynummer2" name="Handynummer2" pattern="\+[0-9]{1,4}[0-9]{9,13}" placeholder="+491234567890"><br>
<small>Bitte geben Sie eine gültige Handynummer ein (beginnend mit '+' gefolgt von Landesvorwahl und Nummer).</small><br>

<label for="Erfahrung2">Berufserfahrung (Jahre):</label><br>
<input type="number" id="Erfahrung2" name="Erfahrung2" required><br>

<label for="Nachricht2">Nachricht:</label><br>
<textarea id="Nachricht2" name="Nachricht2" rows="4"></textarea><br>

<label for="Lebenslauf2">Lebenslauf</label><br>
<input type="file" id="Lebenslauf2" name="Lebenslauf2" required><br>

<label for="Anschreiben2">Anschreiben</label><br>
<input type="file" id="Anschreiben2" name="Anschreiben2" required><br>

<label for="Qualifikationen2">Qualifikationen</label><br>
<input type="file" id="Qualifikationen2" name="Qualifikationen2"><br>

<input type="submit" class="btn" name="BewerbungAbschicken" value="Bewerbung abschicken">
  </form>
</div>
  <!---->
   <section>
  <h2>Initiativbewerbung und Ehrenamtliche Aushilfe</h2>
  <p>Falls Sie Interesse an einer anderen Art von Anstellung, Ausbildung oder einer ehrenamtlichen Mitarbeit im Tierheim Pfotenfreunde Trier haben, freuen wir uns über Ihre Bewerbung!
     Senden Sie uns Ihre vollständigen Bewerbungsunterlagen, einschließlich Anschreiben, Lebenslauf und relevanten Zeugnissen, an die folgende Adresse:
      <a href="mailto:bewerbung&#65312;tierheimtrier.de">bewerbung&#65312;tierheimtrier.de</a><br><br>


    Alternativ können Sie uns gerne persönlich besuchen, um mehr über die Möglichkeiten der Zusammenarbeit zu erfahren.<br><br>

   <strong> Kontakt:</strong><br>
    Tierheim Pfotenfreunde Trier<br>
    Berlinerstraße 4 / 54290 Trier <br>
    Tel.: <a href="tel:+496131487364">06131 - 48 73 64</a> <br>
    E-Mail: <a href="mailto:kontakt&#65312;tierheimtrier.de">kontakt&#65312;tierheimtrier.de</a> <br> 
    <strong>Öffnungszeiten:</strong><br>
    Montag bis Freitag: 08:00 - 18:00 Uhr<br>
    Samstag und Sonntag geschlossen<br>

    Wir freuen uns darauf, von Ihnen zu hören und gemeinsam etwas für die Tiere zu bewegen!<br><br>

    Ihr Team vom Tierheim Pfotenfreunde Trier
    </p>
</section>
    </main>
    <?php
      include_once ("../inc/footer.inc.php");
    ?> 
  </body>
</html>