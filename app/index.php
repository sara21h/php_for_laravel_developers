<?php

require 'app/helpers.php';
require 'app/Task.php';
require 'config.php';

//$task = new Task(1, "comprar pa", "a la panaderia", 0);
//$user = 'debian-sys-maint';
//$pass = 'h7PzOi48oTLz1eDQ';
//$dsn = 'mysql:host=localhost;dbname=phplaraveldevs';

//connect -> API om connect, senese paràmetres entrada i tornarà objecte $dbh
try {
    $dbh = new PDO(
        $config['database']['databasetype'] . ":host=" . ($config['database']['host']) . ";dbname=" . ($config['database']['name']) . "",
        $config['database']['user'],
        $config['database']['password']);
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

