<?php
  // Permanente Weiterleitung zu web/index.php
  header("Location: ./web/index.php", true, 301);

  // Browsergesteuerte Host-Adresse zur manuellen Weiterleitung
  $servername = $_SERVER["HTTP_HOST"];

  $str = <<<HTML
    <!DOCTYPE html>
    <html lang="de">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Weiterleitung zur Startseite | Pfotenfreunde Trier</title>
        <link href="web/css/style.css" rel="stylesheet" type="text/css">
        <link href="web/css/index.css" rel="stylesheet" type="text/css">
        <link rel="alternate icon" type="image/svg" href="web/img/favicon.svg">
      </head>
      <body>
        <main>
          <h1>301 Permanente Weiterleitung</h1>
          <p>Permanente Weiterleitung zu <a href="/web/index.php">web/index.php</a><br><br>
        Falls Sie nicht automatisch weitergeleitet werden, klicken Sie bitte auf: <a href="http://{$servername}/web/index.php">web/index.php</a><br></p>
          <p>
            Dies wurde gemacht, um korrekte relative URIs im Projekt zu garantieren,, sodass das Projekt unabghängig von der ursprünglichen Entwicklungsumgebung laufen sollte (localhost, 127.0.0.1, IPv6, Hosten mit Domain, etc...). Weiterleitungen sollten in einer produktiven Umgebung vermieden werden.
          </p>
        </main>
      </body>
    </html>
  HTML;

  echo $str;
  exit();
?>
