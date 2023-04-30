<?php

namespace Pixel\core\Database;

class Database
{
    public \PDO $pdo;

    public function connect()
    {
        $host = $_ENV('DB_HOST');
        $username = $_ENV('DB_USERNAME');
        $password = $_ENV('DB_PASSWORD');
        $database = $_ENV('DB_DATABASE');
        $db_connection = $_ENV('DB_CONNECTION');

        $this->pdo = new \PDO("$db_connection:host=$host;dbname=$database", "$username", "$password");
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        return $this->pdo;
    }
}