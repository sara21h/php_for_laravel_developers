<?php

require 'app/helpers.php';
require 'app/Tasks.php';

//$task = new Task(1, "comprar pa", "a la panaderia", 0);
$user = 'debian-sys-maint';
$pass = 'h7PzOi48oTLz1eDQ';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);
    //$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $exception) {
    echo 'Error de connexió a la base de dades: ' . $exception->getMessage();
}

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

