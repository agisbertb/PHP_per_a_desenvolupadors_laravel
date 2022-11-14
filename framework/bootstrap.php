<?php

use Framework\App;
use Framework\Database\Connection;
use Framework\Database\Database;

// Laravel Service Prividers
App::bind('config', require 'config.php');

App::bind('database', new Database(
    Connection::make(App::get('config')['database'])
));
