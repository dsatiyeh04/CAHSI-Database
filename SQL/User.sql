CREATE TABLE User (
	Uuser_ID INT(10) NOT NULL AUTO_INCREMENT,
	Uname VARCHAR(40) NOT NULL,
	Uemail VARCHAR(30) NOT NULL,
	Upassword VARCHAR(8) NOT NULL,
	Ugender	CHAR(1) NOT NULL,
	Ptitle_ID INT(5) NOT NULL,
	Ins_ID CHAR(4) NOT NULL,
	Rrole_ID CHAR(1) NOT NULL,
	PRIMARY KEY (Uuser_ID),
	FOREIGN KEY (Ins_ID) REFERENCES Institution (Ins_ID) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (Rrole_ID) REFERENCES Role (Rrole_ID) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE = InnoDB;	

INSERT INTO User VALUES	(0000000001,'John Doe', 'john.doe@utep.edu', 'start123', 'M', '0001', 'UTEP', 'M'), (0000000002,'Dana Doe', 'Dana.doe@comcoll.edu', 'password', 'F', '0002', 'CCLG', 'R'), (0000000003,'Mike Jackson', 'mike.jackson@nmsu.edu', 'start456', 'M', '0003', 'NMSU', 'M');