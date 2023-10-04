<?php

require 'app/helpers.php';
require 'app/Task.php';
require 'config.php';

$dbh = connectDB($config);

$statement = $dbh->prepare('SELECT * FROM tasks');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
//var_dump($tasks[0]);

//executem funció
$greeting = greet();

//QUERY STRING
// imprimeix arrays (chivato) -> var_dump($_GET); de normal echo
//var_dump($_GET['name']);
//$greeting = 'Hola ' . $_GET['name'] . ' ' . $_GET['cognom'] . '!';
//"" quan posem variables, les simples no van amb variables
// o $greeting = 'Hola' . ${name} . '!';
//{} per a variables amb mes d1 frase

