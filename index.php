<?php
//run it with 'php -S localhost:8888'..

require 'functions.php';

// require 'router.php';

//connet to mysql database

class Person{
    public $name;
    public $age;

    public function Breathe(){
        echo $this->name.' is breathin'; 
    }
}

$person = new Person();
$person->name='John Doe';
$person->age=25;

$person->Breathe();