INSERT INTO
	user (
		first_name,
        last_name,
        profile_description
	)
VALUES (
	'Ваня',
    'Денисов',
    'Привет! Я системный аналитик в ACME :)
Тут моя жизнь только для самых классных!'
);

UPDATE
	user
SET
	avatar = 'images/avatar_vanya.jpeg'
WHERE
	id = 1
;



