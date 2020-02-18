<?php
//Website Components
require_once('./system/classes/classes.php');
include_once('./system/mysql_settings.php');


$mysql_handler = new CustomMysql();
$mysql_handler->connect($mysql_host, $mysql_username, $mysql_password, $mysql_database);

$r = $mysql_handler->fetch_data_experimental(["*"], "main_content");
while ($row = $r->fetch_assoc()) {
    echo $row["title"]. "<br>". $row["content"];
}


