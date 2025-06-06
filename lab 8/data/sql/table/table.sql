CREATE DATABASE blog;
CREATE TABLE
	post (
		id INT UNSIGNED AUTO_INCREMENT,
        content MEDIUMTEXT,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        created_by INT UNSIGNED NOT NULL,
        PRIMARY KEY (id)
	);
CREATE TABLE
	user (
		id INT UNSIGNED AUTO_INCREMENT,
		first_name VARCHAR (30) NOT NULL,
		last_name VARCHAR (30) NOT NULL,
		profile_description VARCHAR (200) DEFAULT '',
		PRIMARY KEY (id)
	);
        
ALTER TABLE 
	post
ADD COLUMN
	image VARCHAR (100) NOT NULL
;

ALTER TABLE 
	user
ADD COLUMN
	avatar VARCHAR (100)
;

ALTER TABLE 
	post
MODIFY COLUMN
	content VARCHAR (500) DEFAULT ''
;

ALTER TABLE 
	user
MODIFY COLUMN
	profile_description VARCHAR (255) DEFAULT ''
;
