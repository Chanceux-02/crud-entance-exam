<?php
class Db{
    private $server = "mysql:host=localhost;dbname=employeedb";
    private $username = "root";
    private $password = "";
    private $dbh;

    public function connect(){
        try {
            $this->dbh = new PDO($this->server, $this->username, $this->password);
            return $this->dbh;
            // echo "Hello World";
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage() . "<br>";
            die();
        }
    }
}