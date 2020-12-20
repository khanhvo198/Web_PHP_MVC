<?php
    class DB {
        public $connection;
        protected $servername = "192.168.64.7";
        protected $username = "MyStic";
        protected $password = "123456";
        protected $dbname = "BKAcademy";

        public function __construct() {
            $this->connection = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }
?>