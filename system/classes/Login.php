<?php

require("Classes.inc.php");

class Login extends FormUtilities
{

    private final function check_if_user_exists($username)
    {
        $res = $this->connection->fetch_data(["*"], "users", "WHERE `username` = '$username'");
        if ($res->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    private final function get_user_information($username)
    {
        return $this->connection->fetch_row_as_array(["*"], "users", "WHERE `username` = '$username'");
    }

    private function check_password($username, $input_password)
    {
        $res = $this->connection->fetch_row_as_array(["password"], "users", "WHERE `username` = '$username'");
        $stored_password = $res['password'];
        if (password_verify($input_password, $stored_password)) {
            return true;
        }
        return false;
    }


    public final function login_user($username, $password)
    {
        if (!$this->check_if_filled_out($username, $password)) {
            echo "Fehler: Bitte fuelle alle Felder aus!";
            return false;
        }

        if (!$this->check_if_user_exists($username)) {
            echo "Fehler: dieses Konto schein hier nicht zu existieren!";
            return false;
        }

        if (!$this->check_password($username, $password)) {
            echo "Fehler: dieses Passwort oder dieser Benutzername stimmen nicht ueberein";
            return false;
        }
        echo "Login was successful";
        $_SESSION['logged_in'] = true;
        $user_informations = $this->get_user_information($username);
        $_SESSION['username'] = $user_informations['username'];
        $_SESSION['email'] = $user_informations['email'];
        $_SESSION['created_at'] = $user_informations['created_at'];
        $_SESSION['updated_at'] = $user_informations['updated_at'];
        $_SESSION['perm_group'] = $user_informations['perm_group'];

        header("Location: http://localhost/Portfolio/admin/index.php");
        return true;
    }


}
