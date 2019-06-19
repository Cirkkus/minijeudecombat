<?php

use \PDO;

/**
 * Data Abstract Layer
 */
abstract class Dal
{
    private $driver = "mysql";
    private $host = "127.0.0.1";
    private $port = "8181";
    private $dbname = "anzuarena";
    private $charset = "utf8";
    private $user = "root";
    private $password = "";
    
    protected $dbh;

    protected function Open()
    {
        $connectionString = "{$this->driver}:" .
                            "host={$this->host};" . 
                            "port={$this->port};" .
                            "dbname={$this->dbname};" .
                            "charset={$this->charset};";
        try
        {
            $this->dbh = new PDO($connectionString, $this->user, $this->password);
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
            die();
        }
    }

    protected function Close()
    {
        unset($this->dbh);
    }
}
