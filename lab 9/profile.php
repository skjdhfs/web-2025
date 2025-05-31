<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/profile.css" type="text/css" rel="stylesheet">
        <link href="styles/font.css" type="text/css" rel="stylesheet">
        <link href="styles/menu.css" type="text/css" rel="stylesheet">
        <title>Профиль</title>
    </head>
    <body>
        <div class="menu">
            <a href="home.php" class="menu__icon-wrapper">
                <span class="menu__icon menu__home"></span>
            </a>
            <a href="profile.php" class="menu__icon-wrapper">
                <span class="menu__icon menu__user"></span>
                <span class="menu__icon_active"></span>
            </a>
            <a href="#" class="menu__icon-wrapper">
                <span class="menu__icon menu__plus"></span>
            </a>
        </div>

        <?php
            $jsonDataUsers = file_get_contents('json/users.json');
            $jsonDataPosts = file_get_contents('json/posts.json');
            $users = json_decode($jsonDataUsers, true);
            $posts = json_decode($jsonDataPosts, true);
            $user = $users[0];
            if (isset($_GET["id"])) {
                $id = filter_var($_GET["id"], FILTER_VALIDATE_INT, ['options' => ["min_range" => 1, "max_range" => count($users)]]);
                if ($id) {
                    $user = $users[$id - 1];
                }  
            }
            
        ?>
        <div class="header"></div>
        <div class="profile">
            <img src="images/<?= $user['avatar'] ?>" alt="Аватар пользователя" class="profile__avatar">
            <span class="profile__username">
                <?php 
                    echo htmlentities($user['name']), ' ', htmlentities($user['lastName']);
                ?>
            </span>
            <p class="profile__description">
                <?php
                    echo htmlentities($user['profileDescription']);
                ?>
            </p>
            <div class="icon-wrapper">
                <img src="icons/image.svg" alt="Изображения">
                <span>
                    <?php 
                        echo $user['postsAmount'], ' ', 'постов';
                    ?>
                </span>     
            </div>

            <div class="profile__images-container">
                <?php        
                for ($i = 0; $i < count($posts); $i++) {
                    $post = $posts[$i];
                    if ($post["createdBy"] === $user["id"]) {
                        require 'templates/profile_image.php';
                    };    
                }
                ?>  
            </div>
        </div>         
    </body>
</html>