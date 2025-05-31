
<div class="post">
    <div class="post__header">
        <div class="post__title">
            <img class="post__avatar" src="images/<?= $user['avatar'] ?>" alt="Аватар пользователя">
            <span class="post__username">
                <?php 
                    echo htmlentities($user['first_name']), ' ', htmlentities($user['last_name']);
                ?>
            </span>   
        </div>
                
        <div class="post__icon-wrapper">
            <div class="post__edit"></div>
        </div>
    </div>

    <div class="post__photo">
        <div class="post__indicator">
            <span>1/1</span>
        </div>
        <div class="slider slider-left">
            <div class="slider__arrow-left"></div>
        </div>
        <div class="slider slider-right">
            <div class="slider__arrow-right"></div>
        </div>
        <img src="images/<?= $post['image'] ?>" class="image" alt="Изображение поста">
    </div>

    <div class="post__likes">
        <div class="heart"></div>
        <span><?= $post['likes'] ?></span>
    </div>

    <p class="post__text">
        <?php
            echo htmlentities($post['content']);
        ?>
        <span class="post__more"><br>ещё</span>
    </p>
    <p class="time">
        <?php
            echo htmlentities($post['created_at']);
        ?>    
    </p>
</div> 