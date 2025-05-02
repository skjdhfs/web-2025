<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/font.css" type="text/css" rel="stylesheet">
        <link href="styles/home.css" type="text/css" rel="stylesheet">
    </head>
    <body> 
        <div class="post">
            <div class="header">
                <img class="avatar" src="<?= $user['avatar'] ?>" alt="Аватар пользователя">
                <span class="username">
                    <?php 
                        echo htmlentities($user['name']), ' ', htmlentities($user['lastName']);
                    ?>
                </span>
                <div class="header__icon-wrapper">
                    <div class="edit"></div>
                </div>
            </div>

            <div class="photo">
                <div class="indicator">
                    <span>1/1</span>
                </div>
                <div class="slider">
                    <div class="slider-left"></div>
                </div>
                <div class="slider">
                    <div class="slider-right"></div>
                </div>
                <img src="images/<?= $post['image'] ?>" class="image" alt="Изображение поста">
            </div>

            <div class="likes">
                <div class="heart"></div>
                <span><?= $post['likes'] ?></span>
            </div>

            <div>
                <p class="text">
                    <?php
                        echo htmlentities($post['text']);
                    ?>
                </p>
                <span class="more">ещё</span>
                <span class="time">
                    
                </span>
            </div>
        </div> 
    </body>
</html>