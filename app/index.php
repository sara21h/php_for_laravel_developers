<?php

use Framework\Database\Database;

require 'config.php';

require 'app/helpers.php';


$database = new Database($config); // en laravel no s'utilitzen gairebé mai new -> DI i container
$tasks = $database->selectAll('tasks');
//$tasks = Database::selectAll('tasks'); //crida estàtica -> sense new
//$tasks = Task::selectAll('tasks'); -> Laravel Eloquent

$greeting = greet();


