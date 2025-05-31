<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/font.css" type="text/css" rel="stylesheet">
        <link href="styles/home.css" type="text/css" rel="stylesheet">
        <title>Главная страница</title>
    </head>
    <body>
        <div class="menu">
            <a href="#" class="menu__icon-wrapper menu__icon-wrapper_active">
                <span class="menu__icon menu__icon_home"></span>
            </a>
            <a href="#" class="menu__icon-wrapper">
                <div class="menu__icon menu__icon_user"></div>
            </a>
            <a href="#" class="menu__icon-wrapper">
                <div class="menu__icon menu__icon_plus"></div>
            </a>
        </div>

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
    </body>
</html>