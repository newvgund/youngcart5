<?php
require_once('MySqlConnection.php');

class DBWrapper
{
    private $connection  // connection

    public function __construct()
    {
    }

    private function setConnection($connection)
    {
        $this->connection = $connection;
    }

    public static function forMySql($hostname = NULL, $username = NULL, $password = NULL, $database = NULL, $port = NULL)
    {
        $instance = new self();
        $instance->setConnection(new MySqlConnection($hostname, $username, $password, $database, $port));

        return $instance;
    }
}
?>
