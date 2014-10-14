<?php
// Base Classes
abstract class Connection implements ConnectionController
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $port;

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    private $database_prefix;

    /**
     * @return mixed
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * @param mixed $database
     */
    public function setDatabase($database)
    {
        $this->database = $database;
    }

    /**
     * @return mixed
     */
    public function getDatabasePrefix()
    {
        return $this->database_prefix;
    }

    /**
     * @param mixed $database_prefix
     */
    public function setDatabasePrefix($database_prefix)
    {
        $this->database_prefix = $database_prefix;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
}


// interface
interface ConnectionController
{
    public function connect();
    public function disconnect();
}


// Connection Classes
class MySqlConnection extends Connection
{
    function __construct($hostname = NULL, $username = NULL, $password = NULL, $database = NULL, $port = NULL)
    {
        $this->setHost($hostname);
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setDatabase($database);
        $this->setPort($port);
    }

    public function connect()
    {
        // TODO: Implement connect() method.
    }

    public function disconnect()
    {
        // TODO: Implement disconnect() method.
    }
}


// DBWrapper
class DBWrapper
{
    private $connection;    // connection

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