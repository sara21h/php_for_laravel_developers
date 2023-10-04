<?php

function greet(){
$name = htmlspecialchars($_GET['name']);
$surname = $_GET['surname'];

return "Hola $name $surname!";
}

function dd($xivato){
    var_dump($xivato);
    die();
}

// API
function connectDB($config){ //Dependency Injection
   // dd($config);
    try {
        return new PDO(
            $config['database']['databasetype'] . ":host=" . ($config['database']['host']) . ";dbname=" . ($config['database']['name']) . "",
            $config['database']['user'],
            $config['database']['password']);
        //$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $exception) {
        echo 'Error de connexió a la base de dades: ' . $exception->getMessage();
    }
}

function fetchAllTasks($dbh){

    $statement = $dbh->prepare('SELECT * FROM tasks');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_OBJ);
}