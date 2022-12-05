<?php


use Framework\App;

$tasks = App::get('database')->selectALL('tasks');
//$tasks = Tasks::selectAll('tasks'); Laravel Eloquent

$greeting = greet();

require 'resources/views/index.blade.php';


