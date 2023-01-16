## Metadaten

Die Manifestdatei der Komponente muss manifest.xml oder componentname.xml heißen, in diesem Fall countrybase.xml. Beachten Sie, dass der Teil com_ nicht enthalten ist. Der erste Teil der Datei enthält Metadaten:

```xml
<?xml version="1.0" encoding="utf-8"?>
<extension type="component" method="upgrade">
	<name>countrybase</name>
	<author>Clifford E Ford</author>
	<authorEmail>john.doe@example.com</authorEmail>
	<authorUrl>example.com</authorUrl>
	<creationDate>2022-05-10</creationDate>
	<copyright>(C) 2022 Clifford E Ford</copyright>
	<license>GNU General Public License version 2 or later; see LICENSE.txt</license>
	<version>0.1.0</version>
	<description>COM_COUNTRYBASE_DESCRIPTION</description>
	<namespace path="src">J4xdemos\Component\Countrybase</namespace>
```

Die meisten Metadaten sind selbsterklärend. Zu beachtende Punkte:
* Der Erweiterungstyp ist in diesem Fall ```Komponente``. Es gibt auch andere Erweiterungstypen, wie Module oder Plugins.
* Die Methode kann Install oder Upgrade sein. Letzteres erlaubt eine Neuinstallation nach einem Code-Update.
* Die Versionsnummer ist wichtig! Sie sollte es unmöglich machen, eine ältere Version neu zu installieren. Und sie wird verwendet, um zu kontrollieren, ob Datenbank-Updates erforderlich sind.
* Der Namespace-Pfad src besteht aus drei Teilen:
  * Der erste Teil ist ein vom Anbieter definierter Präfix, also Joomla für den von Joomla gelieferten Code, Acme für den vom Drittanbieter Acme gelieferten Code, und in diesem Fall J4xdemos, ein Name, den ich für alle meine Joomla 4 Code-Demonstrationen gewählt habe.
  * Der zweite Teil gibt den Typ der Erweiterung an. Es könnte eine Komponente oder ein Modul oder ein Plugin oder ... sein.
  * Der dritte Teil ist der Name der spezifischen Erweiterung, in diesem Fall Countrybase.

## Datenbank

Die Manifestdatei definiert die Speicherorte aller sql-Dateien für die Installation, Aktualisierung oder Entfernung. Sie landen in einem Sql-Ordner im Administrator-Ordner.

```xml
	<install>
		<sql>
			<file driver="mysql" charset="utf8">sql/install.mysql.sql</file>
		</sql>
	</install>
	<uninstall>
		<sql>
			<file driver="mysql" charset="utf8">sql/uninstall.mysql.sql</file>
		</sql>
	</uninstall>
	<update>
		<schemas>
			<schemapath type="mysql">sql/updates/mysql</schemapath>
		</schemas>
	</update>
```

## Skriptdatei

Eine Skriptdatei kann für Pre- oder Postflight-Zwecke verwendet werden. Sie kann z. B. verwendet werden, um die Mindestsystemanforderungen vor der Installation zu prüfen oder um Parameter nach der Installation festzulegen.

## Mediendateien

Die Komponente com_countrybase benötigt kein komponentenspezifisches CSS oder Javascript, aber der Code für die Installation ist für den Fall der Fälle enthalten. Die Dateien sind leer.

```xml
	<scriptfile>script.php</scriptfile>

	<media destination="com_countrybase" folder="media">
		<file>joomla.asset.json</file>
		<folder>css</folder>
		<folder>js</folder>
	</media>
```

Beachten Sie, dass die Datei joomla.asset.json vom Web-Asset-Manager verwendet wird, der normalerweise von einer Vorlagendatei aufgerufen wird.

## Site-Dateien

Dies sind die Dateien, die nach root/components/com_countrybase kopiert werden. Beachten Sie, dass der Sprachordner in den Komponentenordner und nicht in den Ordner administrator/language kopiert wird:

```xml
	<files folder="site">
		<folder>language</folder>
		<folder>forms</folder>
		<folder>src</folder>
		<folder>tmpl</folder>
	</files>
```

## Administrator-Dateien

Es gibt mehr Dateien im Administrationsteil der Manifestdatei, weil er mehr zu tun hat:

```xml
	<administration>
		<files folder="admin">
			<filename>access.xml</filename>
			<filename>config.xml</filename>
			<folder>forms</folder>
			<folder>help</folder>
			<folder>language</folder>
			<folder>layouts</folder>
			<folder>services</folder>
			<folder>sql</folder>
			<folder>src</folder>
			<folder>tmpl</folder>
		</files>
		<menu img="class:default">countrybase</menu>
		<submenu>
			<!--
				Note that all & must be escaped to &amp; for the file to be valid
				XML and be parsed by the installer
			-->
			<menu
				link="option=com_countrybase&amp;view=countries"
				img="default"
			>
				COM_COUNTRYBASE_COUNTRIES
			</menu>
			<menu
				link="option=com_countrybase&amp;view=currencies"
				img="default"
			>
				COM_COUNTRYBASE_CURRENCIES
			</menu>
		</submenu>
	</administration>
```

Beachten Sie die Methode zur Erstellung der Menüpunkte des Joomla-Administrators. Es gibt einen Menüpunkt, der keinen Link hat. Und zwei Menüpunkte, die auf die zwei verfügbaren Verwaltungsansichten verweisen: die Liste der Länder und die Liste der Währungen. Auch die Übersetzungen der String-Schlüssel müssen in der Datei com_countrybase.sys.ini sein.

## Server aktualisieren

Der Update-Server-Code teilt Joomla mit, wo es Aktualisierungsinformationen finden soll. Er wird in regelmäßigen Abständen ausgeführt, um zu sehen, ob ein Update verfügbar ist. Lassen Sie diesen Abschnitt aus, wenn Sie keinen Update-Server für Ihre eigene Komponente verwenden.

```xml
	<updateservers>
		<!-- Note: No spaces or linebreaks allowed between the server tags -->
		<server type="extension" name="Countrybase Update Site">https://raw.githubusercontent.com/ceford/j4xdemos-com-countrybase/master/manifest.xml</server>
	</updateservers>
```
Übersetzt mit www.DeepL.com/Translator (kostenlose Version)

