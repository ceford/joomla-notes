## Metadata

The component manifest file must be named manifest.xml or componentname.xml, in this case countrybase.xml. Note that the com_ part is not included. The first part of the file contains metadata:

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

Most of the metadata is self-evident. Items to note:
* The extension type in this case is ```component```. There are other extensions types, such as module or plugin.
* The method can be install or upgrade. The latter allows re-installation after code update.
* The version number is important! It should make it impossible to reinstall an older version. And it is used to control whether database updates are required.
* The namespace path src has three parts:
  * The first part is a supplier defined prefix, so Joomla for Joomla supplied code, Acme for code supplied by the Acme third party extension supplier, and in this case J4xdemos, a name I chose for all my Joomla 4 code demonstrations.
  * The second part indicates the type of extension. It could be Component or Module or Plugin or ...
  * The third part is the specific extension name, in this case Countrybase.

## Database
The manifest file defines the locations of any installation, update or removal sql files. They end up in an sql folder in the administrator folder.

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

## Script File
A script file may be used for pre-flight or post-flight purposes. For example, it could be used to check minimum system requirements before installation or to set parameters after installation.

## Media Files
The com_countrybase component does not need any component specific css or javascript but the code to install them is included just in case. The files are empty.

```xml
	<scriptfile>script.php</scriptfile>

	<media destination="com_countrybase" folder="media">
		<file>joomla.asset.json</file>
		<folder>css</folder>
		<folder>js</folder>
	</media>
```

Note that the joomla.asset.json file is used by the web asset manager, usually called from a template file.

## Site Files
These are the files that are copied to root/components/com_countrybase. Note that the language folder is copied to the component folder and not the administrator/language folder:

```xml
	<files folder="site">
		<folder>language</folder>
		<folder>forms</folder>
		<folder>src</folder>
		<folder>tmpl</folder>
	</files>
```

## Administrator Files
There are more files in the administration part of the manifest file because it has more to do:

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
Note the method to create the Joomla Administrator menu items. There is a menu item that does not have a link. And two menu items that link to the two available administration views: the Countries list and the Currencies list. Also the string key translations need to be in the com_countrybase.sys.ini file.

## Update Server
The update server code tells Joomla where to find update information. It is executed at regular intervals to see if there is an update available. Leave out this section if you are not using an update server for your own component.
```xml
	<updateservers>
		<!-- Note: No spaces or linebreaks allowed between the server tags -->
		<server type="extension" name="Countrybase Update Site">https://raw.githubusercontent.com/ceford/j4xdemos-com-countrybase/master/manifest.xml</server>
	</updateservers>
```
