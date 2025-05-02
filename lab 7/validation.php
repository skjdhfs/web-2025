<?php

const CONTENT_MAX_LENGTH = 500;
const NAME_MAX_LENGTH = 30;
const LASTNAME_MAX_LENGTH = 30;
const PROFILE_DESCRIPTION_MAX_LENGTH = 255;

function validateContent(string $content): bool {
    return strlen($content) <= CONTENT_MAX_LENGTH;
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