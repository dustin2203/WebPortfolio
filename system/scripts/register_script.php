<?php
require('./classes/custom_mysql_class.php');
require('./classes/register_class.php');
include('mysql_settings.php');

# security section
$user_name = (isset($_POST['username']) && is_string($_POST['username'])) ? $_POST['username'] : "" ;
$user_mail = (isset($_POST['email']) && is_string($_POST['email'])) ? $_POST['email'] : "" ;
$user_password = (isset($_POST['password']) && is_string($_POST['password'])) ? $_POST['password'] : "" ;
$confirm_password = (isset($_POST['confirm_password']) && is_string($_POST['confirm_password'])) ? $_POST['confirm_password'] : "" ;

$user_name = htmlspecialchars($user_name);
$user_mail = htmlspecialchars($user_mail);
$user_password = htmlspecialchars($user_password);
$confirm_password = htmlspecialchars($confirm_password);

# Mysql-register object.
$reg_instance = new Register($mysql_host, $mysql_username, $mysql_password, $mysql_database);
$reg_instance->register_user($user_name, $user_mail, $user_password, $confirm_password);