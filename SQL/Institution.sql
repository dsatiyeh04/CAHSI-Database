CREATE TABLE Institution (

	Ins_ID CHAR(10) NOT NULL,
	Iname VARCHAR(30) NOT NULL,
	
	PRIMARY KEY (Ins_ID)	
	
) ENGINE = InnoDB;

INSERT INTO Institution VALUES ('UTEP','University of Texas at El Paso'), ('NMSU','New Mexico State University'), ('EPCC','El Paso Community College'), ('CSUDH', 'California State University Dominguez Hills'), ('CSUSM', 'California State University San Marcos'), ('CSUSTAN', 'California State University Stanislaus'), ('FIU', 'Florida International University'), ('TAMUCC', 'Texas AM University Corpus Christi'), ('UGD', 'University of Houston-Downtown'), ('UPR', 'Universidad de Puerto Rico'), ('NIU', 'Northeastern Illinois University'), ('UTPA', 'University of Texas-Pan American'), ('PUPR', 'Universidad Politecnica Puerto Rico'), ('UPRR', 'Universidad De Puerto Rico Recinto De Rio Piedras'), ('DACC', 'Dona Ana Community College'), ('UPRA', 'Universidad de Puerto Rico-Arecibo'), ('MCCD', 'Merced Community College'), ('UCMERCED', 'UCMerced University of California');