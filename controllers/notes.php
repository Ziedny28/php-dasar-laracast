<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "MyNotes";

$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();

require "views/notes.view.php";