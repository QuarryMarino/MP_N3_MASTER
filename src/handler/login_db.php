<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["email"] !== "" && $_POST["password"] !== "") {
    require_once("connection.php");

    extract($_POST);



    $statement = $mysqli->query("SELECT * FROM usuarios WHERE email='$email';");

    if ($statement->num_rows === 1) {
        $data = $statement->fetch_assoc();

        if (password_verify($password, $data["password"])) {
            session_start();
               
            $_SESSION["usuarios_data"] = $data;
            
        } else {
            header("location: /src/view/login.php");
        }
    }
    else {
     header("location: /src/view/login.php");
    };
 } else {
     header("location: /src/view/login.php");
 }
