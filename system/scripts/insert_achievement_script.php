<?php
session_start();
require('../classes/Classes.inc.php');
include('../mysql_settings.inc.php');
require_once '../classes/Session.php';
$session_handler = new Session;
$session_handler->check_if_login_session_set("logged_in", true, "Login.php");


$achievement_title = (isset($_POST['achievement_title']) && is_string($_POST['achievement_title'])) ? $_POST['achievement_title'] : "" ;
$achievement_content = (isset($_POST['achievement_content']) && is_string($_POST['achievement_content'])) ? $_POST['achievement_content'] : "" ;
$achievement_year = (isset($_POST['achievement_year']) && is_string($_POST['achievement_year'])) ? $_POST['achievement_year'] : "" ;

$achievement_title = htmlspecialchars($achievement_title);
$achievement_content = htmlspecialchars($achievement_content);
$achievement_year = htmlspecialchars($achievement_year);

if(!FormUtilities::check_if_filled_out($achievement_title, $achievement_content, $achievement_year)) {
    die("Error: Please fill in all required fields.");
}

$insert_instance = new CustomMysql();
$insert_instance->connect($mysql_host, $mysql_username, $mysql_password, $mysql_database);

$username = $_SESSION['username'];

if(!$insert_instance->insert_data("INSERT INTO main_content (content, year, title, created_by) VALUES ('$achievement_content', '$achievement_year','$achievement_title', '$username')")){
    die("Error: There has been a problem with the connection to your database");
}

#header("Location: http://localhost/Portfolio/admin/index.php");