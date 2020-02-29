<?php
session_start();
require_once('../../system/classes/Classes.inc.php');
require_once('../../system/mysql_settings.inc.php');
require_once('../../system/database_expressions.inc.php');
?>

<html>
<head>
    <title>Portfolio Setup</title>
</head>
<body>
<h1>Portfolio Setup</h1>
<p>Bitte trage die Daten fuer deine Datenbank in die geeignete PHP-File ein.</p><br>
<p>Diese findest du unter ./system/mysql_settings.php</p>

<form>
    <input type="submit" value="DatenbankTabellen erstellen">
</form>

</body>
</html>

<?php



$mysql_handler = new CustomMysql();
$mysql_handler->connect($mysql_host, $mysql_username, $mysql_password, $mysql_database);





