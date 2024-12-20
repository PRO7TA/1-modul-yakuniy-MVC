<?php
// config/database.php
class Database
{
    protected $host = "localhost";
    protected $dbname = "moduleProject";
    protected $dbport = "3306";
    protected $username = "root";
    protected $password = "";

    public $conn;

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;port=$this->dbport", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
        return $this->conn;
    }
}

