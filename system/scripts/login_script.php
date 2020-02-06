<?php
session_start();
require('../classes/classes.php');
include('../mysql_settings.php');

# Security section
@$user_name = $_POST['username'];
@$user_password = $_POST['password'];

$user_name = (isset($_POST['username']) && is_string($_POST['username'])) ? $_POST['username'] : "" ;
$user_password = (isset($_POST['password']) && is_string($_POST['password'])) ? $_POST['password'] : "" ;

$user_name = htmlspecialchars($user_name);
$user_password = htmlspecialchars($user_password);

# Mysql-login Object
$log_instance = new Login($mysql_host, $mysql_username, $mysql_password, $mysql_database);
$log_succesful = $log_instance->login_user($user_name, $user_password);
