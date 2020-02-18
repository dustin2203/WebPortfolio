<?php

# a lightweight class to implement the possibility to create a stable connection to a mysql data source
# Author:: Dustin Wickert
class CustomMysql
{
    private $connection;

    # a destruct method to close the connection, when the object is destroyed.
    function __destruct()
    {
        $this->close_stream();
    }

    # a method to establish the basic connection
    public function connect($host, $user, $password, $database)
    {
        $mysqli = mysqli_connect($host, $user, $password, $database);
        if (mysqli_connect_errno()) {
            throw new Exception("following error has been occurred: " . mysqli_connect_error());
        }
        $this->connection = $mysqli;
        return $mysqli;
    }

    # a private method to check if the connection is stable
    private function check_if_connection_stable()
    {
        if (!$this->connection) {
            throw new Exception("Error: First you have to call the connect function. Otherwise this object is useless!");
        }
    }


    # a public method to fetch rows in a array format, including the rows as a string.
    public function fetch_row_as_array($query_expression)
    {
        return $this->fetch_data($query_expression)->fetch_assoc();

    }

    public function fetch_rows_as_array($query_expression)
    {
        $res = mysqli_query($this->connection, $query_expression);
        return mysqli_fetch_array($res, MYSQLI_ASSOC);
    }

    # a public method to insert data into a table
    function insert_data($query_expression)
    {
        $allowed_statement = "INSERT INTO";
        if (strpos($query_expression, $allowed_statement) === false) {
            throw new Exception("Error: this function is only for MySQL-insert statements");
        }
        $this->check_if_connection_stable();
        if ($this->connection->query($query_expression)) {
            return true;
        }
        return false;
    }

    public final function create_table($query_expression)
    {
        $allowed_statement = "CREATE";
        if (strpos($query_expression, $allowed_statement) === false) {
            throw new Exception("Error: this function is only for MySQL-create statements");
        }
        $this->check_if_connection_stable();
        if ($this->connection->query($query_expression)) {
            return true;
        }
        return false;
    }

    private function close_stream()
    {
        $this->connection->close();
        return true;
    }

    public final function fetch_data(array $rows, string $table, string $extra_option = NULL)
    {
        $rows = $this->process_array_rows($rows);

        if (!isset($extra_option)) {
            return $this->connection->query("SELECT $rows FROM $table");
        }

        return $this->connection->query("SELECT $rows FROM $table " . $extra_option);

    }

    private function process_array_rows(array $array)
    {
        $processed_rows = "";
        $i = 0;
        foreach ($array as $row) {
            $i == sizeof($array) - 1 ? $processed_rows .= ($row) : $processed_rows .= ($row . ",");
            $i += 1;
        }
        return $processed_rows;
    }

}
