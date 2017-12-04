CREATE TABLE Classification (
	
	Cclassification_ID CHAR(2) NOT NULL,
	Cdesc CHAR(10) NOT NULL,
	
	PRIMARY KEY (Cclassification_ID)
	
) ENGINE = InnoDB;

INSERT INTO Classification VALUES ('C1','Freshman'), ('C2','Sophomore'), ('C3','Junior'), ('C4','Senior');