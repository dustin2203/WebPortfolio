<?php
session_start();
require('../classes/classes.php');
include('../mysql_settings.php');


$achievement_title = (isset($_POST['achievement_title']) && is_string($_POST['achievement_title'])) ? $_POST['achievement_title'] : "" ;
$achievement_content = (isset($_POST['achievement_content']) && is_string($_POST['achievement_content'])) ? $_POST['achievement_content'] : "" ;

$achievement_title = htmlspecialchars($achievement_title);
$achievement_content = htmlspecialchars($achievement_content);
