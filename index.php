<?php

require 'functions.php';

//dd($uri);

function ParseUrl(){
    if(isset($_GET['url'])){
        $url = rtrim($_GET['url'],'/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        
        return $url;
    }
}

//so now i can do a routing or smth, in XAMP, an outdated s-
