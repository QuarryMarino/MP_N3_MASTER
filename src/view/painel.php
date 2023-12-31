

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../styleCSS/dashboard.css" />
    <script src="../main.js" defer> </script>
    <title>Settings</title>
</head>

<body>
    <div class="menu">
        <h2>devchallenges</h2>
        <div id="btn">
            <img src='<?php isset($_SESSION["usuarios_data"]) ? print($_SESSION["usuarios_data"]["img_url"]) : print("../img_url/usuarios.png") ?>' alt='Image'>
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
                    <a href="">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <a class="back" href="../index.php">
        < Back</a>
            <div class="main-container">
                <h2 class="title">Change Info</h2>
                <h3 class="subtitle">Changes will be reflected to every services</h3>
                <form action="../handler/update_db.php" enctype="multipart/form-data" method="post">
                    <label for="image" class="image">
                        <img src='<?php isset($_SESSION["usuarios_data"]) ? print($_SESSION["usuarios_data"]["img_url"]) : print("./img_url/usuarios.png") ?>' alt='Image'>
                        <span class="material-symbols-outlined icon">add_a_photo</span>
                        <h4>CHANGE PHOTO</h4>
                    </label>
                    <input type="file" name="image" id="image" accept="image/*" hidden>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name...">
                    <label for="bio">Bio</label>
                    <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Enter your bio..."></textarea>
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your phone...">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email...">
                    <br>
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password" placeholder="Enter your new password...">
                    <br>
                    <button>Save</button>
                </form>
            </div>
</body>

</html>