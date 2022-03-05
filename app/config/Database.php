<?php
class Database {
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;
    private $stmt;
    private $dbHandler;
    function __construct() {
        $dsn = "mysql:host=$this->dbHost;dbname=$this->dbName";
        try {
            $this->dbHandler = new PDO($dsn, $this->dbUser, $this->dbPass, [
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            // echo 'success';
        } catch(PDOException $er) {
            $this->error = $er->getMessage();
            // echo $this->error;
        }
    }
    // CREATE FUNCTIONS DOWN HERE FOR YOUR QUERY
}