<?php

class Dbconnection {

    public $connection;
    
    /**
     * Method __construct
     *
     * @return void
     */
    function __construct()
    {
        include_once __DIR__."/../config/config.php";  

        $this->connection = new PDO("mysql:host=".DB_HOST.";dbname=". DB_DATABASE, DB_USER, DB_PASSWORD);

        // set the PDO error mode to exception
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->connection;  
    }  
    
    /**
     * Method getConnection
     *
     * @return object
     */
    public function getConnection()
    {
        return $this->connection;
    }    
}  
?>