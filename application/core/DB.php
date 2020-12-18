<?php
    class DB {
        public $connection;
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "aBcD@12345";
        protected $dbname = "BKAcademy";

        public function __construct() {
            $this->connection = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }
?>