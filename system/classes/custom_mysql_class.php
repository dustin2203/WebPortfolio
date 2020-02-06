<?php

use MongoDB\Driver\Exception\ConnectionException;

# a lightweight class to implement the possibility to create a stable connection to a mysql data source
# Author:: Dustin Wickert
class CustomMysql
{
    private $connection;

    # a method to establish the basic connection
    public function connect($host, $user, $password, $database)
    {
        $mysqli = mysqli_connect($host, $user, $password, $database);
        if (mysqli_connect_errno()) {
            echo "Failed do connect to MySQL: " . mysqli_connect_error();
            return false;
        }
        $this->connection = $mysqli;
        return $mysqli;
    }

    # a private method to check if the connection is stable
    private function check_if_connection_stable()
    {
        if (!$this->connection) {
            throw new ConnectionException("First you have to establish a connection with the connect method");
        }
    }

    # a public method to fetch data with a mysql select statement
    public function fetch_data($query_expression)
    {
        $this->check_if_connection_stable();
        $res = mysqli_query($this->connection, $query_expression);
        return $res;
    }

    # a public method to fetch rows in a array format, including the rows as a string.
    public function fetch_rows($query_expression) {
        $rows = $this->fetch_data($query_expression)->fetch_assoc();
        return $rows;
    }

    # a public method to insert data into a table
    public function insert_data($query_expression)
    {
        $this->check_if_connection_stable();
        $this->connection->query($query_expression);
        return true;
    }

    public function close_stream() {
        $this->connection->close();
        return true;
    }

}
