<?php
  // Permanente Weiterleitung zu web/index.php
  header("Location: ./web/index.php", true, 301);
  echo "<b>Permanente Weiterleitung zu <a href=\"./web/index.php\">web/index.php</a></b><br><br>";
  echo "Falls Sie nicht automatisch weitergeleitet werden, klicken Sie bitte <a href=\"./web/index.php\">web/index.php</a>.<br>";
  echo "Dies wurde gemacht, um korrekte relative URIs im Projekt zu garantieren, sollte in einer produktiven Umgebung so nicht gemacht werden.";
  exit();
?>
