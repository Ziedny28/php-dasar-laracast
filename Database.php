<?php
class Database{
    public $connection;
    public function __construct()
    {        
        //watch ur db name
        $dsn = "mysql:localhost;port=3306;dbname=weblanjut_laracasts_myapp;user=root;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }
    public function Query($query){
        
        $statement = $this->connection->prepare($query);
        $statement->execute();
        
        return $statement;
    }
}