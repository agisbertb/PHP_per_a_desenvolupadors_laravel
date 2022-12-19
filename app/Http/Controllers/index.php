<?php

use Framework\App;

$tasks = App::get('database')->selectALL('tasks');

require '../resources/views/index.blade.php';
