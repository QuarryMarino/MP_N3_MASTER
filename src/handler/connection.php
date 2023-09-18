<?php


try{
    $mysqli = new mysqli("localhost", "root", "", "login_db");

}catch( mysqli_sql_exception $e){
    echo 'Error:' . $e-> getMessage();
}


/*$hostname = "localhost"; 
$username = "seu_usuario"; 
$password = "sua_senha"; 
$database = "seu_banco_de_dados"; 

$conexao = new mysqli($hostname, $username, $password, $database);*/