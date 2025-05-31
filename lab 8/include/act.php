<?php

const ACT_UPLOADER = 'uploader';

const STATUS_OK = 'ok';
const STATUS_ERROR = 'error';

const MESSAGE_INVALID_REQUEST_METHOD = 'invalid method';
const MESSAGE_INVALID_ACT = 'invalid act';
const MESSAGE_INVALID_CONTENT = 'invalid content';
const MESSAGE_INVALID_IMAGE = 'invalid image';
const MESSAGE_INVALID_SAVE_IMAGE = 'invalid save image';
const MESSAGE_INVALID_SAVE_DB_IMAGE = 'invalid save db image';

function uploadData(): string {
    $content = isset($_POST['content']) ? trim($_POST['content']) : null;
    if (!$content) {
        return getResponse(STATUS_ERROR, MESSAGE_INVALID_CONTENT);
    }

    if(!validateContent($content)) {
        return getResponse(STATUS_ERROR, MESSAGE_INVALID_CONTENT);
    }

    $image = $_FILES && $_FILES['image']['error'] === UPLOAD_ERR_OK ? $_FILES['image'] : null;
    if (!$image) {
        return getResponse(STATUS_ERROR, MESSAGE_INVALID_IMAGE);
    }

    if(!validateImage($image['type'], $image['size'])) {
        return getResponse(STATUS_ERROR, MESSAGE_INVALID_IMAGE);
    }

    $filename = generateImageName($content);

    $isSuccess = move_uploaded_file($image['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/' . $filename);
    if (!$isSuccess) {
        return getResponse(STATUS_ERROR, MESSAGE_INVALID_SAVE_IMAGE);
    }

    $connection = connectDatabase();
    $isSuccess = savePostToDatabase($connection, $content, $filename, 1);
    if(!$isSuccess) {
        return getResponse(STATUS_ERROR, MESSAGE_INVALID_SAVE_DB_IMAGE);
    }

    return getResponse(STATUS_OK, '');
}

function getResponse(string $status, string $message): string {
    $response = [
        'status' => $status,
        'message' => $message,
    ];
    return (string)json_encode($response);
}
?>