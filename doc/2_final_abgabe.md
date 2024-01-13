## Feedback von Kristin
Der Punkt "Wenn Spender nicht materielle Spenden abgeben wollen, soll es auch möglich sein immaterielle Sachspenden für individuelle Tiere abzugeben." ist keine Funktion der Webseite, oder?

Für die finale Ausarbeitung bitte **Zielgruppen und Funktionen** in **Listenform** angeben.

## Funktionen
Im Vergleich zur Zwischenabgabe wurden alle Funktionen außer des Web-Shops übernommen, da dieser nicht zu den Anforderungen eines Tierheims passt.

## Responsive Design
Wie haben Sie diesen Punkt in die Realisierung integriert? Welche Maßnahmen haben Sie getroffen, welche Techniken haben Sie verwendet? Geben Sie ein oder mehrere Beispiele aus Ihrer Implementierung an, in Aufzählungsform: Aspekt, zugehörige Maßnahme.

responsives Layout:
- Flexbox-Container:
  flexible Anpassung des Layouts bis zu einer bestimmten Breite des Bildschirmes
  Positionierung der enthaltenen Elemente
- Break points:
  Anpassung an verschiedene Endgeräte mit verschiedenen Bildschirmbreiten
- relative Größenangaben (%, rem, em) für Größen und Positionsangaben
- Wortumbrüche + Silbentrennung (css)
Steuerung und verschiedene Eingabemöglichkeiten mit Tastatur, Maus oder Touch:
- Links und Navigationsleiste kann jeweils mit Tastatur, Maus oder Toucheingabe gesteuert werden
- kopieren in Zwischenablage für Smartphones
Geräteunterstützung:
- verschiedene Schriftarten auf die zurückgegriffen werden kann (betriebssystemabhängig)

## Barrierefreiheit
Welche Maßnahmen zur Barrierefreiheit haben Sie getroffen? Geben Sie hier Beispiele an, welche Kriterien Sie in Ihre Überlegungen mit einbezogen haben untersucht haben und was das für Ihre Realisierung bedeutet hat. Geben Sie Beispiele aus Ihrer Implementierung an, in Aufzählungsform:
Aspekt, zugehörige Maßnahme. Orientieren Sie sich an WCAG.
(Anmerkung: Das kann ein Farbschema sein, Schriftarten, Tabindex zum Ansteuern der Schaltflächen, usw.)

### [wcag:](https://www.einfach-fuer-alle.de/wcag2.0/uebersetzungen/How-to-Meet-WCAG-2.0/#toc)
- 1.1 Textalternativen: Stellen Sie Textalternativen für alle Nicht-Text-Inhalte zur Verfügung, so dass diese in andere vom Benutzer benötigte Formen geändert werden können, wie zum Beispiel Großschrift, Braille, Symbole oder einfachere Sprache.
- 1.2 Zeitbasierte Medien: Stellen Sie Alternativen für zeitbasierte Medien zur Verfügung.
- 1.3 Anpassbar: Erstellen Sie Inhalte, die auf verschiedene Arten dargestellt werden können (z.B. einfacheres Layout), ohne dass Informationen oder Struktur verloren gehen.
- 1.4 Unterscheidbar: Machen Sie es Benutzern leichter, Inhalt zu sehen und zu hören einschließlich der Trennung von Vorder- und Hintergrund.
- 2.1 Per Tastatur zugänglich: Sorgen Sie dafür, dass alle Funktionalitäten per Tastatur zugänglich sind.
- 2.2 Ausreichend Zeit: Geben Sie den Benutzern ausreichend Zeit, Inhalte zu lesen und zu benutzen.
- 2.3 Anfälle: Gestalten Sie Inhalte nicht auf Arten, von denen bekannt ist, dass sie zu Anfällen führen.
- 2.4 Navigierbar: Stellen Sie Mittel zur Verfügung, um Benutzer dabei zu unterstützen zu navigieren, Inhalte zu finden und zu bestimmen, wo sie sich befinden.
- 3.1 Lesbar: Machen Sie Inhalt lesbar und verständlich.
- 3.2 Vorhersehbar: Sorgen Sie dafür, dass Webseiten vorhersehbar aussehen und funktionieren.
- 3.3 Hilfestellung bei der Eingabe: Helfen Sie den Benutzern dabei, Fehler zu vermeiden und zu korrigieren.
- 4.1 Kompatibel: Maximieren Sie die Kompatibilität mit aktuellen und zukünftigen Benutzeragenten, einschließlich assistierender Techniken.

### Maßnahmen?

### Beispiele:
- Bilder haben Textalternativen
- Fokus von Eingaben bei Seitenaufruf (Formularen)
- Breadcrumbs
- Kontrast https://contrastchecker.com/
- Tastatursteuerung
- responsives Layout (mediaqueries, Flexboxen, relative Größenangaben)
- deutliches, kontrastreiches hervorheben von Links
- besuchte Links werden anders dargestellt
- anklickbare Elemente werden durch Veränderung des Cursors deutlich angezeigt
- "hover"-Effekte bei anklickbaren Elementen
- kopieren in Zwischenablage Smartphone und PC
- Animationen deaktivierbar für photosensitive Epileptiker
- Formularattribute (required)
- verschiedene Inputfelder für verschieden Funktionalitäten (date, email)
- Rückmeldung bei erfolgreichen Aktionen oder Fehlermeldung
- Unterstützung für Screenreader (Labels für Formelemente, Buttons, Links in schriftlicher Form)

Unterstützung beim Navigieren:
- Breadcrumbs
- Tastatursteuerung/Touchsteuerung
- anklickbare Elemente werden durch Veränderung des Cursors deutlich angezeigt
- besuchte Links werden anders dargestellt
- "hover"-Effekte bei anklickbaren Elementen

Farbschema und Schrift:
- angemessene Schriftgröße
- Vordergrund und Hintergrund sind für Sehbeeinträchtigte gut erkennbar
  (Kontrast: https://contrastchecker.com/)
- deutliches, kontrastreiches hervorheben von Links
- Animationen deaktivierbar für photosensitive Epileptiker

Hilfestellung bei Eingaben:
- kopieren in Zwischenablage Smartphone und PC
- Unterstützung für Screenreader (Labels für Formelemente, Buttons, Links in schriftlicher Form)
- Rückmeldung bei erfolgreichen Aktionen oder Fehlermeldung
- "hover"-Effekte bei anklickbaren Elementen 
- Fokus auf die ersten Elemente der Formulare bei Seitenaufruf
- Formularattribute: required, autocomplete und placeholder
- verschiedene Inputfelder für verschieden Funktionalitäten (date, email)

weitere Punkte:
- responsives Layout (mediaqueries, Flexboxen, relative Größenangaben)
  -> kompatibel auch für andere Benutzeragenten
- Bilder haben Textalternativen
