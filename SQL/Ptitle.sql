CREATE TABLE PTitle (

	Ptitle_ID CHAR(4) NOT NULL,
	Ptitle_desc VARCHAR(30) NOT NULL,
	
	PRIMARY KEY (Ptitle_ID)
	
) ENGINE = InnoDB;		


INSERT INTO PTitle VALUES ('0001','MS in Software Engineering'), ('0002','MS in Compuer Science'), ('0003','MS in Database Management');