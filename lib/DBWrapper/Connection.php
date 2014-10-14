<?php
abstract class Connection
{
    private $host;
    private $username;
    private $password;
    private $database;

    private $database_prefix;

    // connection interface
    abstract public function connect();
    abstract public function disconnect();
}
?>
