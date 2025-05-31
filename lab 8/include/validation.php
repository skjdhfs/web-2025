<?php

    const IMAGE_EXT = '.jpeg';
    const CONTENT_MAX_LENGTH = 500;
    const IMAGE_MAX_LENGTH = 50;
    const IMAGE_MAX_RANDOM = 5;
    const IMAGE_TYPE = 'image/jpeg';
    const IMAGE_SIZE = 1024 * 1024;
    const NAME_MAX_LENGTH = 30;
    const LASTNAME_MAX_LENGTH = 30;
    const PROFILE_DESCRIPTION_MAX_LENGTH = 255;

    function validateContent(string $content): bool {
        return strlen($content) <= CONTENT_MAX_LENGTH;
    }

    function validateImage(string $type, int $size): bool {
        return $type === IMAGE_TYPE && $size <= IMAGE_SIZE;
    }

    function generateImageName(string $title): string {
        $filename = substr($title, 0, IMAGE_MAX_LENGTH);
        $randomPart = substr(sha1($title . time()), 0, IMAGE_MAX_RANDOM);
        return $filename . '-' . $randomPart . IMAGE_EXT;
    }

    function validateName(string $name): bool {
        return preg_match('/^[a-zA-Zа-яА-ЯёЁ\s]+$/u', $name) && strlen($name) <= NAME_MAX_LENGTH;
    }

    function validateLastName(string $lastName): bool {
        return preg_match('/^[a-zA-Zа-яА-ЯёЁ\s]+$/u', $lastName) && strlen($lastName) <= LASTNAME_MAX_LENGTH;
    }

    function validateProfileDescription(string $profileDescription): bool {
        return preg_match('/^[a-zA-Zа-яА-ЯёЁ\s]+$/u', $profileDescription) && strlen($profileDescription) <= PROFILE_DESCRIPTION_MAX_LENGTH;
    }

?>