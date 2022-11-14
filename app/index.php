<?php

use Framework\App;


require 'app/helpers.php';

$tasks = App::get('database')->selectALL('tasks');
//$tasks = Tasks::selectAll('tasks'); Laravel Eloquent

$greeting = greet();
