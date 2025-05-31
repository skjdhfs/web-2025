INSERT INTO
	post (
		content,
        created_by
	)
VALUES (
	'Так красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в городке, занесенном снегом по ручку двери...»',
    1
);

UPDATE
	post
SET
	image = 'night.jpeg'
WHERE
	id = 1
;



