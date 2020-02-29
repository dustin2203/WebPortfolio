<?php
session_start();
require('../classes/Classes.inc.php');
include('../mysql_settings.inc.php');


$post_user_name = (isset($_POST['username']) && is_string($_POST['username'])) ? $_POST['username'] : "";
$post_user_password = (isset($_POST['password']) && is_string($_POST['password'])) ? $_POST['password'] : "";

$post_user_name = htmlspecialchars($post_user_name);
$post_user_password = htmlspecialchars($post_user_password);

# Mysql-login Object
$log_instance = new Login($mysql_host, $mysql_username, $mysql_password, $mysql_database);
$login_successful = $log_instance->login_user($post_user_name, $post_user_password);

