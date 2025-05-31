<!DOCTYPE html>
<html lang='ru'>
    <head>
        <meta charset='UTF-8'>
        <title>Создать пост</title>
    </head>
    <body>
        <form action='api.php?act=uploader' enctype='multipart/form-data' method='POST'>
            <div>
                <label>Текст</label>
                <input type='text' name='content' required>
            </div>
            <div>
                <label>Картинка</label>
                <input type='file' name='image' accept='.jpeg' required>
            </div>
            <div>
                <input type='submit'>
            </div>
        </form>
    </body>
</html>