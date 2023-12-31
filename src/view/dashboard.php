<?php
session_start();
if (!isset($_SESSION["usuarios_data"])) {
    echo "No esta loggeado";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../styleCSS/dashboard.css" />
    <script src="../main.js" defer > </script>
    <title>Personal Info</title>
</head>
<body>
<div class="menu">
        <h2>devchallenges</h2>
        <div id="btn">
            <img src='<?php isset($_SESSION["usuarios_data"]) ? print($_SESSION["usuarios_data"]["img_url"]) : print("./img.png") ?>' alt='Image' width:'300'>
            <h3><?php isset($_SESSION["usuarios_data"]) ? print($_SESSION["usuarios_data"]["name"]) : print("usuarios") ?></h3>
            <span class="material-symbols-outlined">arrow_drop_down</span>
            <div class="menu-cover">
                <div class="link">
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                    <a href="./dashboard.php">My Profile</a>
                </div>
                <div>
                    <span class="material-symbols-outlined">
                        group
                    </span>
                    <a href="#">Group Chat</a>
                </div>
                <div>
                    <span class="material-symbols-outlined">
                        logout
                    </span>
                    <a href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <h1>Personal info</h1>
    <h2 class="paragraph">Basic info, like your name and photo</h2>
    <div class="main-container">
        <div class="main-menu">
            <h3>Profile</h3>
            <a href="./painel.php">edit</a> 
            <h4>Some info may be visible to other people</h4>
        </div>
        <div class="menu-rows">
            <h4>PHOTO</h4>
            <img src='<?php isset($_SESSION["usuarios_data"]) ? print($_SESSION["usuarios_data"]["img_url"]) : print("./img.png") ?>' alt='Image' width:'300'>
        </div>
        <div class="menu-rows">
            <h4>NAME</h4>
            <h3><?php isset($_SESSION["usuarios_data"]) ? print($_SESSION["usuarios_data"]["name"]) : print("") ?></h3>
        </div>
        <div class="menu-rows">
            <h4>BIO</h4>
            <h3><?php isset($_SESSION["usuarios_data"]) ? print($_SESSION["usuarios_data"]["bio"]) : print("") ?></h3>
        </div>
        <div class="menu-rows">
            <h4>PHONE</h4>
            <h3><?php isset($_SESSION["usuarios_data"]) ? print($_SESSION["usuarios_data"]["phone"]) : print("") ?></h3>
        </div>
        <div class="menu-rows">
            <h4>EMAIL</h4>
            <h3><?php isset($_SESSION["usuarios_data"]) ? print($_SESSION["usuarios_data"]["email"]) : print("") ?></h3>
        </div>
        <div class="menu-rows">
            <h4>PASSWORD</h4>
            <h3>************</h3>
        </div>
    </div>
</body>

</html>