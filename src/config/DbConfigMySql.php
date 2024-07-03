<?php

namespace config;

use PDO;
use PDOException;

/**
 * Class DbConfigMySql
 * Manages connection to a MySQL database using PDO.
 */
class DbConfigMySql
{

    public $connection;
    private $host;
    private $username;
    private $password;
    private $dbname;

    /**
     * DbConfigMySql constructor.
     * Initializes the database connection parameters from ENV variables.
     */
    public function __construct()
    {
        $this->host = getenv('DB_HOST');
        $this->username = getenv('DB_USER');
        $this->password = getenv('DB_PASSWORD');
        $this->dbname = getenv('DB_NAME');
        $this->connection = null;
    }

    /**
     * Retrieves the database host.
     *
     * @return array|false|string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Retrieves the database username.
     *
     * @return array|false|string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Retrieves the database password.
     *
     * @return array|false|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Retrieves the database name.
     *
     * @return array|false|string
     */
    public function getDbname()
    {
        return $this->dbname;
    }


    /**
     * Establishes connection to the database.
     *
     * @return PDO|null
     */
    public function getConnection()
    {
        $this->connection = null;
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->connection->exec("set names utf8");

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->connection;
    }
}


?>