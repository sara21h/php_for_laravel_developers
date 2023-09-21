<?php

function greet(){
    $name = htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];

    return "Hola $name $surname!";
}
//executem funció
$greeting = greet();

//QUERY STRING
// imprimeix arrays (chivato) -> var_dump($_GET); de normal echo
//var_dump($_GET['name']);
//$greeting = 'Hola ' . $_GET['name'] . ' ' . $_GET['cognom'] . '!';
//"" quan posem variables, les simples no van amb variables
// o $greeting = 'Hola' . ${name} . '!';
//{} per a variables amb mes d1 frase

