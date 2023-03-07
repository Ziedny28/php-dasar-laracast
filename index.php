<?php
//run it with 'php -S localhost:8888'..

require 'functions.php';
require 'Database.php';

// require 'router.php';

//watch ur db name
$config = require('config.php');

$db = new Database($config['database']);
$posts = $db->Query("select * from posts")->fetchAll();

dd($posts);
