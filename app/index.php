<?php

// QUERY STRING
//var_dump($_GET['name']);
//$name = 'Andreu';

// API
function greet(){
    $name = htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];

    echo "Hola $name $surname!";
}

$greeting = greet();

//$greting = 'Hola' . $_GET['name'] . '' . $_GET['name'] . '!';