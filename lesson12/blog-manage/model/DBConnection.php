<?php
namespace Model;

use PDO;

class DBConnection {
    private $dsn;
    private $username;
    private $password;
    private $options;
    public $connection;

    public function __construct($dsn, $username, $password, $options = []) {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->options = $options;
        $this->connect();
    }

    private function connect() {
        try {
            $this->connection = new PDO($this->dsn, $this->username, $this->password, $this->options);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}
?>
