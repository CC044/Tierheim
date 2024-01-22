Da die Navigationsleiste und der Header auf allen Seiten gleich bleiben soll, haben wir uns entschlossen, diese Mithilfe von include auszulagern. Von der Navigationsleiste aus sollen alle primären Ziele angesteuert werden können. So haben wir die Navigationspunkte nach Wichtigkeit sortiert. 

Zu unseren Zielgruppen gehören auch Personen, die von unterwegs möglicherweise mit einem Smartphone unsere Webseite besuchen wollen und daher auch Touch-Eingaben ausführen. So ist es möglich, diese Navigationsleiste auf 3 Arten zu verwenden. 

Man kann die Maus verwenden. Elemente werden beim darüber hovern markiert. Man kann die Tastatur verwenden, das heißt mit Tab zum gewünschten Element navigieren und das fokussierte Element wird entsprechend markiert. Oder es kann auch eine Touch-Eingabe ausgeführt werden. [demonstrieren Strg+M]
Besuchte Links werden farblich anders dargestellt. 
Der Benutzer kann diesen Pfeil berühren. Und das Menü bleibt eingeblendet bestehen, auch wenn man versehentlich woanders hin klickt. Für Personen, die etwas langsamer sind, bleibt das Untermenü eine längere Zeit offen. Der Button des Untermenüs hat auch ein Label, damit Personen mit Screenreadern sich besser zurechtfinden. 
Die Tiersteckbriefe können natürlich um mehr Kategorien erweitert werden. Zur Navigation gehört auch die Orientierung mithilfe von Breadcrumbs. Damit der Benutzer immer weiß, an welcher Stelle er sich gerade befindet und besser navigieren kann.

Bei der Tierauswahl erhält der Besucher ein Bild. Alle Bilder haben auch einen Alternativtext, falls das Bild nicht geladen werden kann. Jedes Tier hat auch einen Namen, Vorlieben und Abneigungen und es besteht die Möglichkeit das Tier zu adoptieren, eine Spende zukommen zu lassen oder eine Patenschaft zu übernehmen.  

Aktionen, die der Benutzer vornimmt, werden bestätigt. Also bei einem Klick auf Adoptieren erhalte ich eine Bestätigung. 

Werfen wir auch einen Blick in den Code. Hier in der tiersteckbriefeMain.php wird der HTML Code für die Karten vorbereitet. Erst wird die Kategorie abgefragt und dann werden Tierkarten innerhalb der Animalcards.php erstellt. An dieser Stelle werden die Attribute festgelegt. Hier würde dann auch die Anbindung einer Datenbank realisiert werden können. Und die Attribute werden dann, weil sie noch in Array Form sind, gekürzt und als String ausgegeben. Es wird ein Dateipfad wird zurückgegeben für das Bild. Und Aufbereitet und der HTML Code für die Tierkarten wird dann zusammengestellt und zurückgegeben.
Die Anzahl der Tierkarten sowie die Anzahl der Attribute kann angepasst werden. Wenn ein Fehler auftritt, wird dieser mit Catch aufgefangen.

## Übergang zu Andre

Das war der Vorgang wie Tiere an Besucher vermittelt werden. Nun präsentiert Andre die Abgabe von Tieren.

Dauer: ~ 03:40
