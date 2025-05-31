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
	image = 'shop.jpeg'
WHERE
	id = 10
;

UPDATE
	post
SET
	content = ''
WHERE
	id = 10
;
