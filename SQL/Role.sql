CREATE TABLE Role (

	Rrole_ID CHAR(1) NOT NULL,
	Rdesc CHAR(10) NOT NULL,
	
	PRIMARY KEY (Rrole_ID)
	
) ENGINE = InnoDB;				

INSERT INTO Role VALUES	('M','Mentor'), ('R','Reviewer'), ('S','Student'), ('A','Admin');