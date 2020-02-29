<?php
require("Classes.inc.php");

# author:: Dustin Wickert
# a class to implement the register procedure
class Register extends FormUtilities
{

    # private method to check hash the password
    private function password_hash($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    protected final function check_if_user_exists($email, $username)
    {
        $res = $this->connection->fetch_data(["*"], "users", "WHERE `email` = '$email' OR `username` = '$username'");
        if ($res->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function register_user($username, $email, $password, $confirm_password) {
        if(!$this->check_if_filled_out($username, $email, $password, $confirm_password)) {
            echo "Fehler: Bitte fuelle alle Felder aus!";
            return false;
        }
        if(!$this->check_password_equality($password, $confirm_password)) {
            echo "Fehler: Deine Passwörter muessen uebereinstimmen!";
            return false;
        }
        if ($this->check_if_user_exists($email, $username)){
            echo "Fehler: diese Email oder dieser Username existiert/existieren bereits!";
            return false;
        }

        $crypted_password = $this->password_hash($password);
        $this->connection->insert_data("users", ["username", "email", "password"], [$username, $email, $crypted_password] );
        echo "Du wurdest erfolgreich registiert";


        return true;
    }

    /*function __destruct()
    {
        $this->connection->close();
    }*/
}
