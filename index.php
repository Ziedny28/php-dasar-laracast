<?php

require 'functions.php';

//dd($uri);

// function ParseUrl(){
//     if(isset($_GET['url'])){
//         $uri = rtrim($_GET['url'],'/');
//         $uri = filter_var($uri,FILTER_SANITIZE_URL);
        
//         return $uri;
//     }
// }
// var_dump(ParseUrl());
//so now i can do a routing or smth, in XAMP, an outdated s-

//or i can just run it with php -S localhost:8888 so..
dd($_SERVER['REQUEST_URI']);