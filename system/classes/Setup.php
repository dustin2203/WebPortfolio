<?php

require("Classes.inc.php");

class Setup
{

    private $connection;

    function __construct($mysql_host, $mysql_user, $mysql_password, $mysql_database)
    {
        $this->connection = new CustomMysql();
        $this->connection->connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
    }


    public final function install_system(string $database_expression) {

        return $this->connection->create_table($database_expression);

    }


}