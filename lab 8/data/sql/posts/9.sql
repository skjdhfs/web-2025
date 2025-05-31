INSERT INTO
	post (
		content,
        created_by
	)
VALUES (
	'',
    1
);

UPDATE
	post
SET
	image = 'people.jpeg'
WHERE
	id = 9
;

UPDATE
	post
SET
	content = ''
WHERE
	id = 9
;
