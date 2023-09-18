<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once("connection.php");

    session_start();

    $idUser = intval($_SESSION["usuarios_data"]["id"]);
    var_dump('$_SESSION');

    if (isset($_FILES["image"]) && $_FILES["image"]["name"] !== "") {

        $temp =  $_FILES["image"]["tmp_name"];

        $dest = "../img/" . $_FILES["image"]["name"];

        move_uploaded_file($temp, $dest);

        require_once("connection.php");
        
        $destDB = "../img/" . $_FILES["image"]["name"];
        $mysqli->query("UPDATE  usuarios SET img_url='$destDB' WHERE id=$idUser ");

        
    }

    if (isset($_POST["name"]) && $_POST["name"] !== "") {
        $name = $_POST["name"];
        $mysqli->query("UPDATE  usuarios SET name='$name' WHERE id=$idUser ");
    }

    if (isset($_POST["bio"]) && $_POST["bio"] !== "") {
        $bio = $_POST["bio"];
        $mysqli->query("UPDATE  usuarios SET bio='$bio' WHERE id=$idUser ");
    }

    if (isset($_POST["phone"]) && $_POST["phone"] !== "") {
        $phone = $_POST["phone"];
        $mysqli->query("UPDATE  usuarios SET phone='$phone' WHERE id=$idUser ");
    }

    if (isset($_POST["email"]) && $_POST["email"] !== "") {
        $email = $_POST["email"];
        $mysqli->query("UPDATE  usuarios SET email='$email' WHERE id=$idUser ");
    }

    if (isset($_POST["password"]) && $_POST["password"] !== "") {
        $password = $_POST["password"];

        $hask = password_hash($psswrd, PASSWORD_DEFAULT);

        $mysqli->query("UPDATE  usuarios SET password='$hask' WHERE id=$idUser ");
    }

    $stnt = $mysqli->query("SELECT * FROM usuarios WHERE id='$idUser';");

    if ($stnt->num_rows === 1) {
        $_SESSION["usuarios_data"] = $stnt->fetch_assoc();
    }

    header("Location: ../view/dashboard.php");
} else {
    "Not accessing from POST";
}
