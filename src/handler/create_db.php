<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST['email']!== '' && $_POST['password']!== ''){

    require_once("./connection.php");
    

 
  extract($_POST);
    $hash = password_hash($password, PASSWORD_DEFAULT);
  $mysqli ->query("INSERT INTO usuarios(email, password) values ('$email','$hash')");
  
  
 
    
}else{
    header("location: ./src/handler/login.php");
};