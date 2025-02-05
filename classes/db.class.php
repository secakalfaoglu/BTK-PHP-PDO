<?php
class DB
{

    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'mydb';

    protected function connect()
    {
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $pdo = new PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); //default fetch mode'u obje olarak ayarladık

            return $pdo;
        } 
        catch (PDOException $e) {
            echo "bağlantı hatası: " . $e->getMessage();
        }
    }
}
