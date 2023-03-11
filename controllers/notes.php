<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "MyNotes";

$notes = $db->Query('SELECT * FROM notes WHERE user_id = 1')->fetchAll();

require "views/notes.view.php";