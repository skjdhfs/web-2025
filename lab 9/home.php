<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/font.css" type="text/css" rel="stylesheet">
        <link href="styles/home.css" type="text/css" rel="stylesheet">
        <link href="styles/menu.css" type="text/css" rel="stylesheet">
        <title>Лента</title>
    </head>
    <body>
        <div class="menu">
            <a href="home.php" class="menu__icon-wrapper">
                <span class="menu__icon menu__home"></span>
                <span class="menu__icon_active"></span>
            </a>
            <a href="profile.php" class="menu__icon-wrapper">
                <span class="menu__icon menu__user"></span>
            </a>
            <a href="#" class="menu__icon-wrapper">
                <span class="menu__icon menu__plus"></span>
            </a>
            
        </div>
        <div class="header"></div>
        <div class="newsfeed">
            
            <?php
                require_once 'include/database.php';
                $connection = connectDatabase();
                $posts = getPostsFromDatabase($connection);
                foreach ($posts as $post) {
                    $id = $post['created_by'];
                    $user = findUserInDatabase($connection, $id);
                    include 'templates/post.php';
                }
            ?>
        </div>    
    </body>
</html>