INSERT INTO
	user (
		first_name,
        last_name,
        profile_description
	)
VALUES (
	'Лиза',
    'Дёмина',
    ''
);

UPDATE
	user
SET
	avatar = 'images/avatar_liza.jpeg'
WHERE
	id = 2
;