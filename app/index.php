<?php

require 'app/helpers.php';

require 'app/Task.php';

//$task = new Task(1,'comprar pa','a la panaderia',0);
//var_dump($task);

$user = 'debian-sys-maint';
$pass = 'JzQ3pGNmIxKl3HMf';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);
} catch (\Exception $e){
    echo 'Error de conneexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks');

$statement->execute();

//fethAllTasks
$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');

var_dump($tasks);

$greeting = greet();

