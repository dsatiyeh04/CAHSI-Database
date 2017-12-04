CREATE TABLE User (
	Uuser_ID INT(10) NOT NULL AUTO_INCREMENT,
	Uname VARCHAR(40) NOT NULL,
	Uemail VARCHAR(30) NOT NULL,
	Upassword VARCHAR(8) NOT NULL,
	Ugender	CHAR(1) NOT NULL,
	Uphone_number CHAR(10) NOT NULL,
	Ptitle_ID INT(5) NOT NULL,
	Ins_ID CHAR(10) NOT NULL,
	Rrole_ID CHAR(1) NOT NULL,
	PRIMARY KEY (Uuser_ID),
	FOREIGN KEY (Ins_ID) REFERENCES Institution (Ins_ID) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (Rrole_ID) REFERENCES Role (Rrole_ID) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE = InnoDB;	

INSERT INTO User VALUES	(1,'John Doe', 'john.doe@utep.edu', 'start123', 'M', '9151278567', '0001', 'UTEP', 'M'), (2,'Dana Doe', 'Dana.doe@comcoll.edu', 'password', 'F', '9151275476', '0002', 'EPCC', 'R'), (3,'Mike Jackson', 'mike.jackson@nmsu.edu', 'start456', 'M', '9151228954', '0003', 'NMSU', 'M');