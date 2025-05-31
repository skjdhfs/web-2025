
<div class="post">
    <div class="header">
    <img class="avatar" src="images/<?= $user['avatar'] ?>" alt="Аватар пользователя">
        <span class="username">
            <?php 
                echo htmlentities($user['first_name']), ' ', htmlentities($user['last_name']);
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
                echo htmlentities($post['content']);
            ?>
        </p>
        <span class="more">ещё</span>
        <span class="time">
            <?php
                echo htmlentities($post['created_at']);
            ?>    
        </span>
    </div>
</div> 
