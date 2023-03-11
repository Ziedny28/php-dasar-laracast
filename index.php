<?php
//run it with 'php -S localhost:8888'..

require 'functions.php';
require 'Database.php';

// require 'router.php';

//watch ur db name
$config = require('config.php');
$db = new Database($config['database']);

$id=$_GET['id'];
$query = "select * from posts where id = :id";
$posts = $db->Query($query,[':id'=>$id])->fetchAll();

dd($posts);
