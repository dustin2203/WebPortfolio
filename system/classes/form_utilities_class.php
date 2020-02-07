<?php

require("classes.php");

# a class to implement useful form methods to verify a specific form.
# Author:: Dustin Wickert

class FormUtilities
{

    protected $connection;

    # construct method executed when object is getting initialized
    function __construct($host, $user, $password, $database)
    {
        $this->connection = new CustomMysql();
        $this->connection->connect($host, $user, $password, $database);

    }

    # destruct method executed when object is getting destroyed
    function __destruct()
    {
        $this->connection->close_stream();
    }

# private method to check if all fields are filled in.
    public final function check_if_filled_out()
    {
        $fieldargs = func_get_args();

        foreach ((array)$fieldargs as $fieldarg) {
            if (!isset($fieldarg) ||
                !(is_string($fieldarg) || is_array($fieldarg)) ||
                trim($fieldarg == "")
            ) {
                return false;
            }
        }
        return true;
    }

    # private method to check if two password are equal.
    protected final function check_password_equality($password, $confirm_password)
    {
        if ($password !== $confirm_password) {
            return false;
        }
        return true;
    }


}
