<?php

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
            throw new Exception("Error: First you have to call the connect function. Otherwise this object is useless!");
        }
    }

    # a public method to fetch data with a mysql select statement
    public function fetch_data($query_expression)
    {
        $this->check_if_connection_stable();
        return mysqli_query($this->connection, $query_expression);
    }

    # a public method to fetch rows in a array format, including the rows as a string.
    #TODO:: FIXEN
    public function fetch_row_as_array($query_expression) {
        return $this->fetch_data($query_expression)->fetch_assoc();

    }

    public function fetch_rows_as_array($query_expression){
        $res = mysqli_query($this->connection, $query_expression);
        return mysqli_fetch_array($res, MYSQLI_ASSOC);
    }

    # a public method to insert data into a table
    public function insert_data($query_expression)
    {
        $allowed_statement = "INSERT INTO";
        if(strpos($query_expression, $allowed_statement) === false) {
            throw new Exception("Error: this function is only for MySQL-insert statements");
        }
        $this->check_if_connection_stable();
        if($this->connection->query($query_expression)) {
            return true;
        }
        return false;
    }

    public function create_table($query_expression) {
        $allowed_statement = "CREATE";
    }

    public function close_stream() {
        $this->connection->close();
        return true;
    }

}
