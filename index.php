<?php
//run it with 'php -S localhost:8888'..

require 'functions.php';
require 'Database.php';

// require 'router.php';

$db = new Database();
$posts = $db->Query("select * from posts where id > 1")->fetch(PDO::FETCH_ASSOC);

dd($posts);
