<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bewerbungsstatus | Pfotenfreunde Trier</title>
  <link href="../web/css/style.css" rel="stylesheet" type="text/css">
  <link href="../web/css/bewerbungVerarbeitung.css" rel="stylesheet" type="text/css">
  <link rel="alternate icon" type="image/svg" href="../web/img/favicon.svg">
  <script defer src="../web/scripts/navigation.js"></script>
</head>
<body>
   <?php
      include_once ("../inc/headerNav.inc.php");
      ?> 
  <main id="main">
    <?php
$Vorname = $Nachname = $Email = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        if (preg_match('/^Vorname/', $key)) {
            $Vorname = htmlspecialchars($value);
        } elseif (preg_match('/^Nachname/', $key)) {
            $Nachname = htmlspecialchars($value);
        } elseif (preg_match('/^email/', $key)) {
            $Email = htmlspecialchars($value);
        }
    }   
}
      echo "<h1>Bewerbung erfolgreich abgeschickt!</h1>";
      $Bewerbunginfo = "<p>" . "Liebe/r $Vorname $Nachname," . "<br>" . "vielen Dank für ihre Interesse. Ihre Bewerbung wurde an uns übermittelt und wir werden uns innerhalb weniger Wochen nach Ende der Bewerbungsfrist bei ihnen auf ihrer E-Mail-Adresse $Email melden." . "</p>";
      echo $Bewerbunginfo;
    ?>
  </main>
  <?php
      include_once ("../inc/footer.inc.php");
      ?> 
</body>
</html>