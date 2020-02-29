<?php

# a class to implement important session methods
# Author:: Dustin Wickert
class Session
{

    # a method to start the session if it is not already initialized
    public function session_start()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    # a method checking if a specific session value is set or not
    public function check_if_value_set($session_value)
    {
        if (@$_SESSION[$session_value] == false) {
            die("Bitte logge dich zuerst ein! <a href='http://localhost/Portfolio/admin/Login.php'>Im Panel anmelden!</a>");
        }
        return true;
    }

    public function check_if_login_session_set($login_session_var, $login_session_true_value, $login_script_loc) {
        if (!isset($_SESSION[$login_session_var]) || $_SESSION[$login_session_var] != $login_session_true_value) {
            $url = $_SERVER["SCRIPT_NAME"];
            if (isset($_SERVER["QUERY_STRING"])) {
                $url .= "?" . $_SERVER["QUERY_STRING"];
            }
            header("Location: $login_script_loc?url=" . urlencode($url));
        }
        return true;
    }

    # a method to unset all session variables and to destroy the session
    public function clear_session()
    {
        session_unset();
    }

}