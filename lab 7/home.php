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
            require_once 'validation.php';

            $jsonDataUsers = file_get_contents('json/users.json');  
            $jsonDataPosts = file_get_contents('json/posts.json');
            $users = json_decode($jsonDataUsers, true);
            $posts = json_decode($jsonDataPosts, true);

            foreach ($posts as $post) {
                if (isset($_GET["id"])) {
                    $id = filter_var($_GET["id"], FILTER_VALIDATE_INT, ['options' => ["min_range" => 1, "max_range" => count($users)]]);
                    if (!$id) {
                        $id = $post["userId"];
                    }
                }
                else {
                    $id = $post["userId"];
                }

                $user = $users[$id - 1];
                $text = validateContent($post['text']);
                $name = validateName($user['name']);
                $lastName = validateLastName($user['lastName']);

                if ($user['id'] === $post['userId']) {
                    if ($text && $name && $lastName) {
                        require 'templates/post.php';
                    }   
                }  
            }
        ?>
    </body>
</html>