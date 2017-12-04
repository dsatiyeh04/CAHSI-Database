CREATE TABLE ABDocument (
	ABKey_doc INT(10) NOT NULL AUTO_INCREMENT,
	ABdocument BLOB,
	
	PRIMARY KEY (ABKey_doc)
) ENGINE = InnoDB;

INSERT INTO ABDocument VALUES	(1,''), (2,''), (3,'');