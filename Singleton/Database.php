<?php

class Database
{
    private static ?Database $instance = null;
    private string $host = '';
    private string $username = '';
    private string $password = '';
    private string $database = '';
    private PDO $connection;

    private function __construct()
    {
        //Create new database connection using PDO
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->database";
            $this->connection = new PDO($dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            die("Connection Failed: " . $e->getMessage());
        }
    }

    private function __clone() {}

    public static function getInstance(): ?Database
    {
        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }
}