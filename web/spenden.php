<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spenden | Pfotenfreunde Trier</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/spenden.css" rel="stylesheet" type="text/css">
    <link rel="alternate icon" type="image/svg" href="img/favicon.svg">
    <meta name="robots" content="nofollow">
    <meta name="description" content="Beschreibung">
    <script defer src="scripts/navigation.js"></script>
    <script defer src="scripts/spenden.js"></script>
  </head>
  <body>
    <?php
      include_once ("../inc/headerNav.inc.php");
    ?>

    <main id="main">
      <!-- Spendeninformationen -->
      <section id="spendenTop">
        <section id="linkeSeite">
          <section id="infos">
            <h2 class="centerAlign">Spendeninformationen</h2>
            <p>Auf dieser Seite können Sie für die Arbeit des Tierheimes spenden. Damit finanzieren Sie unter anderem das Futter und die tierärztlichen Bahandlungen unserer Tiere. Um Ihre Spende abzugeben, können Sie entweder das Spendenformular auf dieser Seite benutzen oder direkt über die unten angegebenen Bankdaten an uns spenden.</p>
            <p>
              <strong>Spendenkonto</strong><br>
              Bank Trier<br>
              Kontonummer: 1234 5678 90<br>
              Bankleitzahl: 0008 0009<br>
              <abbr title="International Bank Account Number">IBAN</abbr>: <a id="copyIBAN">DE11 0009 0009 1234 5678 90</a><br>
              <abbr title="Bank Identifier Code">BIC</abbr>: QWEASDYX<br>
              Verwendungszweck: Pfotenfreunde Allgemeine Spende
            </p>
            <p class="centerAlign">
              <strong>Vielen Dank für Ihre Spende !!!</strong>
            </p>
          </section>
        </section>
        <!-- Spendenformular -->
        <section id="spendenformular">
          <h1 class="centerAlign">Spendenformular</h1>
          <section id="formular">
            <form action="../lib/spendeVerarbeiten.php" method="POST" autocomplete="on">
              <fieldset id="fieldBetrag">
                <legend>Betrag</legend>
                <label for="betrag">Betrag:</label>
                <div id="betragInput">
                  <input type="number" id="betrag" name="betrag" required min="1" autofocus>
                  <p>&#8364;</p>
                </div> 
              </fieldset>
              <fieldset>
                <legend>Auswahl</legend>
                <div>
                  <input type="radio" id="einmal" name="zeitintervall" value="einmalig">
                  <label for="einmal">einmalige Spende</label>
                </div>
                <div>
                  <input type="radio" id="monat" name="zeitintervall" value="monatlich">
                  <label for="monat">monatliche Spende</label>
                </div>
                <div>
                  <input type="radio" id="jahr" name="zeitintervall" value="jaehrlich">
                  <label for="jahr">jährliche Spende</label>
                </div>
              </fieldset>
            
              <fieldset>
                <legend>Bankdaten</legend>
                <div>
                  <label for="iban">IBAN:</label>
                  <input type="text" id="iban" name="iban" required="" minlength="22" maxlength="22" autocomplete="on" placeholder="DE11 0009 0009 1234 5678 90">
                </div>
                <div>
                  <label for="institut">Kreditinstitut:</label>
                  <input type="text" id="institut" name="institut" required autocomplete="on" placeholder="Sparkasse Vorderpfalz">
                </div>
                <div>
                   <label for="bic">BIC:</label>
                  <input type="text" id="bic" name="bic" required minlength="8" maxlength="11" autocomplete="on" placeholder="QWEASDYX">
                </div>           
              </fieldset>
          
              <fieldset>
                <legend>Adressdaten</legend>
                <div class="parallel">
                  <div>
                    <label for="nachname">Nachname:</label>
                    <input type="text" id="nachname" name="nachname" required  autocomplete="on" autocapitalize="on" placeholder="Nachname">
                  </div>
                  <div>
                    <label for="vorname">Vorname:</label>
                    <input type="text" id="vorname" name="vorname" required  autocomplete="on" autocapitalize="on" placeholder="Vorname">
                  </div>
                </div>
                 
                <div class="parallel">
                  <div>
                    <label for="plz">PLZ:</label>
                    <input type="number" id="plz" name="plz" min="10000" max="99999" required autocomplete="on" placeholder="67923">
                  </div>
                  <div>
                    <label for="adresse">Adresse:</label>
                    <input type="text" id="adresse" name="adresse" required autocomplete="on" autocapitalize="on" placeholder="Sonnenallee 3a">
                  </div>
                </div>
                 
                
                <label for="geb">Geburtsdatum:</label>
                <input type="date" id="geb" name="geb" required autocomplete="on" value="2006-06-15">
                <label for="mail">E-Mail:</label>
                <input type="email" id="mail" name="mail" required autocomplete="on" placeholder="beispiel@email.de">
              </fieldset>
              <!--<label for="spendeSende">Jetzt Spenden</label>-->
              <input type="submit" id="spendeSenden" class="btn" name="SpendeSenden" value="Jetzt spenden">
              <!-- <button>test1 this btn would send form</button> -->
            </form>
            <!-- <button>test2 this btn wouldnt send form</button> -->
          </section>
        </section>
      </section>
    </main>
    
    <?php
      include_once ("../inc/footer.inc.php");
    ?>
  </body>
</html>
