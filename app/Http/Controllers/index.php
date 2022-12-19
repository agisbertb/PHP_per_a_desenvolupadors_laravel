<?php

use Framework\App;

$tasks = App::get('database')->selectALL('tasks');

$greeting = greet();

require '../resources/views/index.blade.php';
