<?php

require 'functions.php';

//or i can just run it with php -S localhost:8888 so..

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if($uri === '/'){
    require('controllers/index.php');
}
if($uri === '/about'){
    require('controllers/about.php');
}
if($uri === '/contact'){
    require('controllers/contact.php');
}