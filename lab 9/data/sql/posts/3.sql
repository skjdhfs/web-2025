INSERT INTO
	post (
		content,
        created_by
	)
VALUES (
	'Мой любимый город!',
    1
);

UPDATE
	post
SET
	image = 'city.jpeg'
WHERE
	id = 3
;

