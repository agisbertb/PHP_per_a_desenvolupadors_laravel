<?php

use Framework\Database\Database;

require 'config.php';;

require 'app/helpers.php';

$database = new Database($config); // -> Laravel no utilitzem gairebé mai new -> DI i Container
$tasks = $database->selectALL('tasks');
//$tasks = Database::selectAll('tasks'); // Crida estàtica -> sense new
//$tasks = Tasks::selectAll('tasks'); Laravel Eloquent


$greeting = greet();
