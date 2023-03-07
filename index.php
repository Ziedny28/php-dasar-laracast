<?php
//run it with 'php -S localhost:8888'..

require 'functions.php';

// require 'router.php';

//connet to mysql database

//watch ur db name
$dsn = "mysql:localhost;port=3306;dbname=weblanjut_laracasts_myapp;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post){
    echo '<li>'.$post['title'].'</li>';
}