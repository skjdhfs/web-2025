<?php

const DB_HOST = '127.0.0.1';
const DB_NAME = 'web';
const DB_USER = 'lena';
const DB_PASSWORD = 'Privet123';

function connectDatabase(): PDO {
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
    $user = DB_USER;
    $password = DB_PASSWORD;
    return new PDO($dsn, $user, $password);
}

function getPostsFromDatabase(PDO $connection, int $limit = 100): array {
    $query = <<<SQL
        SELECT
            image, content, created_at, created_by, likes
        FROM
            post
        LIMIT {$limit}
    SQL;
    $statement = $connection->query($query);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function findPostInDatabase(PDO $connection, int $id): ?array {
    $query = <<<SQL
        SELECT
            id, image, content, created_at, created_by, likes
        FROM post
        WHERE id = $id
        SQL;
    $statement = $connection->query($query);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row ?: null;
}

function findUserInDatabase(PDO $connection, int $id): ?array {
    $query = <<<SQL
        SELECT
            id, first_name, last_name, profile_description, avatar
        FROM user
        WHERE id = $id
        SQL;
    $statement = $connection->query($query);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function savePostToDatabase(PDO $connection, string $content, string $image, int $id): bool {
    $query = <<<SQL
        INSERT INTO
            post (content, image, created_by)
        VALUES
            (:content, :image, :created_by)
    SQL;

    $statement = $connection->prepare($query);
    return $statement->execute([
        ':content' => $content,
        ':image' => $image,
        ':created_by' => $id,
    ]);
}

?>