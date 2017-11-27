CREATE TABLE Institution (

	Ins_ID CHAR(4) NOT NULL,
	Iname VARCHAR(30) NOT NULL,
	
	PRIMARY KEY (Ins_ID)	
	
) ENGINE = InnoDB;

INSERT INTO Institution VALUES ('UTEP','University of Texas at El Paso'), ('NMSU','New Mexico State University'), ('CCLG','Community College');