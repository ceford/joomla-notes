# Einführung in Visual Studio-Code

## VS Code - Eine beliebte kostenlose IDE

Aus [Wikipedia](https://en.wikipedia.org/wiki/Visual_Studio_Code):
<blockquote>Visual Studio Code, allgemein auch als VS Code bezeichnet, ist ein Quellcode-Editor von Microsoft für Windows, Linux und macOS. Zu den Funktionen gehören Unterstützung für Debugging, Syntaxhervorhebung, intelligente Codevervollständigung, Snippets, Code-Refactoring und eingebettetes Git. Benutzer können das Design, Tastaturkürzel und Einstellungen ändern und Erweiterungen installieren, die zusätzliche Funktionen hinzufügen.</blockquote>

## Installation

Die Standardseite der Website [VS Code](https://code.visualstudio.com/) enthält eine Dropdown-Liste für jede unterstützte Plattform. Die Chancen stehen gut, dass Ihre Plattform vorausgewählt ist. Also herunterladen und installieren und schon kann es losgehen.

### Einstieg

Die Seite __Get Started__ von VS Code enthält einige __Start__-Elemente, eine Liste mit __Recent__-Elementen und eine kurze Liste mit __Walkthroughs__. Wenn VS Code völlig neu für Sie ist, sollten Sie sich diese ansehen. Sie dauern nur wenige Minuten.

Die VS Code-Dokumentation ist über das Menü __Hilfe / Dokumentation__ verfügbar. Die Einführungsvideos sind sehr sehenswert. Jede dauert 2 bis 6 Minuten und bietet eine hervorragende Einführung in die Funktionen von VS Code

https://code.visualstudio.com/docs/getstarted/introvideos

Die offizielle Dokumentation ist die Anlaufstelle, wenn Sie bestimmte Informationen nachschlagen möchten.

### VS-Code-Erweiterungen

VS-Code kann für jede Art von Text verwendet werden, einschließlich einer Vielzahl von Programmiersprachen. Es funktioniert mit JavaScript, ohne Erweiterungen hinzuzufügen. Andere Sprachen werden vom Kontext erkannt. Wenn Sie also mit dem Erstellen und Speichern von PHP-Code beginnen, werden Sie wahrscheinlich aufgefordert, ein PHP-Support-Paket zu installieren.

Klicken Sie auf das Symbol __Erweiterungen__ in der linken __Aktivitätsleiste__, um zu sehen, was Sie installiert haben und was empfohlen wird. Sie benötigen die PHP-Debug-Erweiterung!

### Das VS-Code-Bildschirmlayout

Einige Begriffe, die in nachfolgenden Anweisungen verwendet werden:
* ___Aktivitätsleiste:___ die schmale Leiste links auf dem Bildschirm. Wählen Sie ein beliebiges Symbol aus, um die primäre Seitenleiste zu öffnen oder zu schließen.
* ___Primäre Seitenleiste:___ Wenn geöffnet, werden Details der ausgewählten Aktivität angezeigt.
* ___Statusleiste:___ am unteren Rand des Bildschirms. Es zeigt, was los ist.
* ___Panel:___ ein Bereich unter den Texteditoren, um andere Informationen anzuzeigen.
Wählen Sie oben rechts ein Layout-Symbol aus, um eines dieser Elemente zu öffnen oder zu schließen.

## Codieren einer Joomla-Erweiterung

Um eine Erweiterung zu erstellen, besteht Ihr Ziel darin, eine ZIP-Datei zu erstellen, die Sie auf einer funktionierenden Joomla-Site installieren können. Sie benötigen also einen Ordner für Ihren Code. Dies sollte sich in Ihrem persönlichen Dateibereich auf Ihrem Laptop oder Desktop-Computer befinden, der für die lokale Entwicklung verwendet wird. Es sollte sich nicht in Ihrem Website-Baum befinden. Beispielsweise könnten Sie __~/jextensions__ verwenden, um Unterordner für verschiedene Erweiterungen zu enthalten. Ich verwende __~/git__, weil es kurz und einfach zu buchstabieren ist, obwohl es möglicherweise verwirrend ist, da jeder Unterordner ein separates Git-Repository verwendet.

### Beispielcode

Wenn Sie an Beispielcode arbeiten möchten, steht auf GitHub eine Erweiterung mit dem Namen __mod_debugme__ zur Verfügung. Wie der Name schon sagt, handelt es sich um ein Modul mit einigen Fehlern. Zusätzlich zum Modulcode gibt es eine __build.xml__-Datei, um eine Möglichkeit zum Automatisieren des Builds zum Testen und Erstellen einer ZIP-Datei zu veranschaulichen.

Das Modul ist so konzipiert, dass es die nächsten paar (standardmäßig 3) Ereignisse (Geburtstage) aus einer in einer Datenbanktabelle gespeicherten Liste anzeigt. Sie können sich vorstellen, dass dies in einem Büro oder einer Familienseite in der Erwartung von Kuchen verwendet wird.

Es ist möglicherweise am besten, mit Git-Befehlen von der Befehlszeile aus loszulegen. Erstellen Sie zuerst einen Ordner für Ihren Code und klonen Sie dann das Remote-Repository:

```mkdir ~/git
cd ~/git
git clone https://github.com/ceford/j4xdemos-mod-debugme
```

Die Antwort sollte nur wenige Sekunden dauern:

```
Cloning into 'j4xdemos-mod-debugme'...
remote: Enumerating objects: 23, done.
remote: Counting objects: 100% (23/23), done.
remote: Compressing objects: 100% (16/16), done.
remote: Total 23 (delta 3), reused 23 (delta 3), pack-reused 0
Unpacking objects: 100% (23/23), done.
```

Sie sollten sich einen Moment Zeit nehmen, um sich den Inhalt des Ordners anzusehen:
```
cd j4xdemos-mod-debugme
ls -al
total 16
drwxr-xr-x   6 ceford  staff   192  2 Sep 17:48 .
drwxr-xr-x   3 ceford  staff    96  2 Sep 17:48 ..
drwxr-xr-x  12 ceford  staff   384  2 Sep 17:48 .git
-rw-r--r--   1 ceford  staff  1402  2 Sep 17:48 README.md
-rw-r--r--   1 ceford  staff   927  2 Sep 17:48 build.xml
drwxr-xr-x   8 ceford  staff   256  2 Sep 17:48 mod_debugme
```

Der Ordner __.git__ enthält Informationen über das Repo. Die Datei __README.md__ ist ein Markdown-Dokument, das dieses Repo beschreibt. Die Datei __build.xml__ ist eine Datei, die verwendet wird, um die Erweiterung mit einem externen Tool, Phing, zu erstellen, das später beschrieben wird. Der Ordner __mod_debugme__ enthält den Code der Erweiterung.

### In Joomla installieren

Komprimieren Sie den Erweiterungsordner, um eine installierbare ZIP-Datei zu erstellen:

```
zip -r mod_debugme.zip mod_debugme
```
Sie können die ZIP-Datei jetzt auf der Joomla-Site installieren, die Sie zum Testen verwenden. Nach der Installation müssen Sie ein Standortmodul erstellen und es einer Modulposition zuweisen. Da es sich um ein defektes Modul handelt, könnten Sie es einer Position auf __Alle Seiten__ zuweisen, während Sie daran arbeiten; oder Sie könnten es einer Position auf einer einzelnen Seite zuweisen; oder Sie könnten es in einem Artikel positionieren, der einen eigenen Menüpunkt hat.

Löschen Sie nach der Installation die ZIP-Datei.

### Aktivieren Sie den Debug-Modus

Setzen Sie in Joomlas Globaler Konfiguration __Debug System__ auf __Yes__ und __Error Reporting__ auf __Maximum__.

Wenn Sie eine Seite öffnen, die das fehlerhafte Modul enthält, sehen Sie einen Stack-Trace, der Ihnen mitteilt, wo ein Fehler ausgelöst wurde.

![Beispiel Stack Trace](https://docs.joomla.org/images/3/3f/J4.x-vscode-primer-stack-trace-de.png "Beispiel Stack Trace")

Manchmal befindet sich der Codierungsfehler in der ersten Zeile des Stack-Trace. Andernfalls, wenn der Fehler im Bibliothekscode ausgelöst wird, beispielsweise durch die Übergabe ungültiger Daten an eine Datenbankfunktion, kann der Codierungsfehler weiter unten in der Liste der Funktionsaufrufe stehen.

## Erweiterungsordner in VS Code öffnen

Verwenden Sie in VS Code das Menüelement Datei / Ordner öffnen, um den Ordner zu suchen und zu öffnen, der Ihre lokale Kopie des __mod_debugme__-Erweiterungscodes enthält. Sie sollten etwas Ähnliches wie das Folgende sehen:

![VSCode-Bildschirm](https://docs.joomla.org/images/3/39/J4.x-vscode-primer-screen.png "VSCode-Bildschirm")

Möglicherweise können Sie das Problem diagnostizieren, indem Sie einfach den Code lesen. Im Fall des Fehlers __Class "DebugHelper" not found__ sehen Sie, dass eine __use__-Anweisung ein paar Zeilen zuvor auskommentiert wurde. Das Vergessen, eine __use__-Anweisung einzufügen, ist ein häufiger Fehler während der anfänglichen Entwicklung!

Beheben Sie dieses Problem und komprimieren und installieren Sie das Modul erneut. Dieser Schritt wird etwas mühsam, wenn Sie mehrere Probleme haben. Hier kommen Build-Tools ins Spiel.

## Phing

Phing ist ein Befehlszeilentool, das für alle Plattformen verfügbar ist und zum Erstellen von Softwarepaketen mithilfe von Anweisungen verwendet wird, die in einer XML-Datei mit dem standardmäßigen Namen build.xml gespeichert sind. Für die Arbeit mit Erweiterungscode kann es für zwei Dinge verwendet werden:

* Kopieren Sie geänderte Dateien aus Ihrem Erweiterungsquellordner an die richtigen Stellen in Ihrem Websiteordner.
* Generieren Sie eine neue ZIP-Datei für neue Installationen.

Laden Sie [Phing](https://www.phing.info/) herunter und installieren Sie es. Andere Build-Tools sind verfügbar! Sie können Phing in Ihrem eigenen bin-Ordner oder in einem bin-Ordner des Systems installieren. Sie müssen den Pfad zu Ihrem Phing-Code notieren. In diesem Beispiel ist es __~/bin/phing-latest.phar__. Sie können es von der Befehlszeile aus ausprobieren, nachdem Sie in den Ordner mit Ihrem Erweiterungscode gewechselt sind:

```
cd ~/git/j4xdemos-mod-debugme
php ~/bin/phing-latest.phar
```

Antwort:

```
Buildfile: /Users/ceford/git/j4xdemos-mod-debugme/build.xml

mod_debugme > main:
      ... Any copied files will be mentioned here
      [zip] Building zip: /Users/ceford/zips/mod_debugme.zip

BUILD FINISHED

Total time: 0.0863 seconds
```

## VS-Code-Aufgaben

Um Phing in VS Code auszuführen, müssen Sie eine __tasks.json__-Datei im Ordner __.vscode__ im Stammverzeichnis des Ordners __j4xdemos-mod-debugme__ erstellen. Wenn letzteres nicht vorhanden ist, erstellen Sie es zuerst. Erstellen Sie dann die Datei __tasks.json__ und geben Sie den folgenden Code ein:

```
{
	// See https://go.microsoft.com/fwlink/?LinkId=733558
	// for the documentation about the tasks.json format
	"version": "2.0.0",
	"tasks": [
	  {
		"label": "Build mod_debugme",
		"type": "shell",
		"command": "php ~/bin/phing-latest.phar",
		"windows": {
		  "command": "php ~/bin/phing-latest.phar"
		},
		"group": "build",
		"presentation": {
		  "reveal": "always",
		  "panel": "shared"
		}
	  }
	]
}
```

Windows-Benutzer müssen den Windows-spezifischen Befehl korrigieren. Über das Menü __Terminal / Run Build Task__ können Sie nun die Erweiterung bauen. Das Ergebnis des Befehls sollte im Terminalbereich unter dem Bearbeitungsbereich erscheinen.

```
  *  Executing task: php ~/bin/phing-latest.phar 

Buildfile: /Users/ceford/git/gitdemo/j4xdemos-mod-debugme/build.xml

mod_debugme > main:

      [zip] Nothing to do: /Users/ceford/zips/mod_debugme.zip is up to date.

BUILD FINISHED

Total time: 0.1031 seconds

 *  Terminal will be reused by tasks, press any key to close it. 
```

Es kann zu unverständlichen Fehlermeldungen kommen. Die wahrscheinlichste Ursache sind ungültige Pfade zu Ordnern in der Datei __build.xml__ oder es wurde kein Ordner erstellt. Nur eine weitere Art von Problem zum Debuggen!

## Debugging

Sie sollten in der Lage sein, den ersten Fehler durch Codeinspektion zu beheben. Kompliziertere Probleme erfordern das schrittweise Durchlaufen des Codes mit dem Debugger. Auf diese Weise können Sie Variablen untersuchen, um zu sehen, ob sie Werte enthalten, die Sie erwarten, beispielsweise wenn Sie Argumente an Bibliotheksfunktionen übergeben.

### __php.ini__ Einstellungen

Um das Debuggen mit Xdebug einzurichten, müssen Sie einige Einträge am Anfang Ihrer __php.ini__-Datei vornehmen.

```
zend_extension="xdebug.so"
xdebug.mode="debug"
xdebug.client_port=9003
xdebug.start_with_request = yes
``` 

Nachdem Sie alle Änderungen gespeichert haben, starten Sie Ihren Apache-Server neu.

### Website-Fenster hinzufügen

Ihr Erweiterungsordner enthält nur wenige Dateien, die _____Quellen_____ der auf Ihrer Website installierten Dateien. Das Debuggen zur Laufzeit umfasst das Setzen von Breakpoints in Ihren _____site_____-Dateien, sodass Sie Zugriff auf diese Dateien benötigen. Sie können das Menü __Datei / Ordner zum Arbeitsbereich hinzufügen...__ verwenden, um den Site-Ordner zu Ihrem Arbeitsbereich hinzuzufügen. Es besteht jedoch eine sehr gute Chance, dass Sie am Ende Änderungen an Site-Dateien anstelle von Quelldateien vornehmen. Daher ist es wahrscheinlich am besten, ein separates VS-Code-Fenster zum Debuggen zu öffnen.

* ___Neues Fenster öffnen:___ Wählen Sie im VS-Code-Menü __Datei / Neues Fenster__ und wählen Sie den Ordner mit Ihrer Joomla-Website aus.

* ___Ordner öffnen:___ Wählen Sie im neu geöffneten Fenster __Datei / Ordner öffnen...__ aus dem VS-Code-Menü. Suchen Sie Ihren Website-Ordner und wählen Sie ihn aus. Sie sollten eine Liste aller Dateien auf Ihrer Joomla-Website in der primären Seitenleiste sehen.

### Konfiguration starten

Damit das Debuggen tatsächlich in VS Code funktioniert, benötigen Sie eine Startkonfiguration. Erstellen Sie im Stammverzeichnis Ihrer Website einen Ordner mit dem Namen __.vscode__ (beachten Sie den führenden Stopp), der eine Datei mit dem Namen __launch.json__ mit folgendem Inhalt enthält:

```
{
	"configurations": [
		{
			"name": "Listen for XDebug",
            "type": "php",
            "request": "launch",
            "hostname": "0.0.0.0",
            "port": 9003,
			"stopOnEntry": true,
            "pathMappings": {
                "/Users/ceford/Sites/j421rc2": "${workspaceFolder}"
            }
		}
	]
}
```

Denken Sie daran, das pathMappings-Element in diesem Beispiel durch die tatsächlichen pathMappings auf Ihrer eigenen Website zu ersetzen. Das Element stopOnEntry unterbricht die Ausführung in der allerersten Zeile des ausgeführten PHP-Codes.

### Debuggen __mod_debugme__

Jetzt sind Sie bereit, die Fehler im installierten Modul zu finden und zu beheben.

* ___Modulcode finden:___ Finde den ersten Fehler in Zeile 16 von JROOT/modules/mod_debugme/mod_debugme.php.

* ___Haltepunkt setzen:___ Klicken Sie in das Feld links neben der Zahl 16. Beim Bewegen der Maus erscheint ein blassroter Fleck, der nach dem Klicken vollständig rot wird, um anzuzeigen, dass ein Haltepunkt gesetzt wurde.

* ___Debug starten:___ Wählen Sie im VS-Code-Menü __Ausführen / Debuggen starten__. Laden Sie in Ihrem Browser Ihre Seite neu. Ihr VS-Code-Fenster sollte wieder erscheinen, wobei der Code in der ersten Zeile der Site-Datei __index.php__ angehalten wird. Am oberen Rand des Bildschirms befinden sich einige Symbole zur Steuerung des Debug-Prozesses. Sie sollten selbsterklärend sein. Wenn nicht, schlagen Sie in der Hilfe/Dokumentation zu VS Code nach.

* ___Fortfahren:___ Wählen Sie die Schaltfläche „Weiter“ – der Code wird bis zu Ihrem ersten Haltepunkt ausgeführt. Untersuchen Sie den Code, um zu sehen, was das Problem ist.

* ___Hover:___ Wenn Sie den Mauszeiger über eine Variable bewegen, der ein Wert zugewiesen wurde, erscheint ein kleiner Tooltip, der die Variablenattribute zusammenfasst. Für Variablen, denen keine Werte zugewiesen wurden, gibt es keinen Tooltip.

* ___Variablen:___ Die linke Spalte enthält weitere Informationen über den Status des Codes am Haltepunkt. Es gibt zu viele, um sie hier zu behandeln. Erkunden Sie sie nach Bedarf!

* ___Debugging stoppen:___ Es ist wahrscheinlich am besten, das Fortfahren-Symbol auszuwählen, da sonst die Webseite leer geliefert wird. Andernfalls können Sie die Schaltfläche Stop oder das Menü Run / Stop Debugging verwenden.

### Fehler beheben

___Denken Sie daran:___ Beheben Sie nicht den Fehler im Website-Code! Korrigieren Sie es im Quellcode!

Korrigieren Sie den Quellcode und verwenden Sie dann __Terminal / Run Build Task...__.

Debuggen neu starten.

### Tipps

Ein paar nicht so offensichtliche Probleme:

* Sie beheben den ersten Fehler, aber es stürzt immer noch in dieser Zeile ab. Schauen Sie in mod_debugme.xml nach, um zu sehen, wo die Quelle von Namespace-Klassen definiert ist. Wenn es in der Quelle behoben ist, müssen Sie die ZIP-Datei neu installieren oder __administrator/cache/autoload_psr4.php__ löschen. Wenn nicht vorhanden, erstellt Joomla diese Datei aus Manifestdateien neu. Aber wenn es einen falschen oder fehlenden Eintrag hat, wird es nicht behoben, bis die Erweiterung neu installiert wird.

* Manchmal müssen Sie einige Zeilen vor der Zeile, in der der Fehler auftritt, einen Haltepunkt setzen, insbesondere wenn Sie Werte überprüfen möchten, die an Funktionsaufrufe übergeben werden.

* Tabelle __xxx.yyy\_debugme__ existiert nicht. Ah ja, der Code zum Erstellen einer Tabelle bei der Installation und zum Entfernen bei der Deinstallation wurde nie erstellt. Sie müssen eine SQL-Abfrage in phpMyAdmin mit dem Inhalt der Datei __mod\_debugme.sql__ ausführen. Denken Sie daran, __#\___ in den Tabellennamen für Ihr Datenbankpräfix zu ändern. Und wenn es immer noch fehlschlägt, überprüfen Sie den Tabellennamen im Code.

## Bildschirmfoto

Wenn alles behoben ist, sehen Sie möglicherweise Folgendes:

![Ansicht des Frontend-Moduls](https://docs.joomla.org/images/1/1b/J4.x-vscode-primer-debugme-fixed-en.png "Frontend-Debug-Modul")
Kuchentage?

## Verweise

Von Joomla! Dokumentation: [Visual Studio Code](https://docs.joomla.org/Visual_Studio_Code) behandelt auch die Konfiguration anderer Tools, zum Beispiel CodeSniffer und PHPUnit.
