CREATE TABLE Student (

Sstudent_ID INT(10) NOT NULL AUTO_INCREMENT,
Sname VARCHAR(40) NOT NULL,
Semail VARCHAR(30) NOT NULL,
Spassword VARCHAR(8) NOT NULL,
Sgender CHAR(1) NOT NULL,
Uuser_ID INT(10) NOT NULL,
Ins_ID CHAR(4) NOT NULL,
Cclassification_ID CHAR(2) NOT NULL,
Rrole_ID VARCHAR(1) NOT NULL,

PRIMARY KEY (Sstudent_ID),

FOREIGN KEY (Uuser_ID) 
REFERENCES User (Uuser_ID)
ON UPDATE CASCADE
ON DELETE CASCADE,

FOREIGN KEY (Ins_ID) 
REFERENCES Institution (Ins_ID)
ON UPDATE CASCADE
ON DELETE CASCADE,

FOREIGN KEY (Cclassification_ID) 
REFERENCES Classification (Cclassification_ID)
ON UPDATE CASCADE
ON DELETE CASCADE,

FOREIGN KEY(Rrole_ID)
    REFERENCES Role(Rrole_ID)
    ON UPDATE CASCADE
    ON DELETE CASCADE

) ENGINE = InnoDB;


INSERT INTO Student
VALUES	(0000000001,'Juan Saenz', 'juan.saenz@utep.edu', 'start123', 'M', 1, 'UTEP', 'C1', 'S'), (0000000002,'Patricia Watson', 'patricia.watson@cclg.edu', 'password', 'F', 3, 'CCLG', 'C3', 'S'), (0000000003,'Will Smith', 'will.smith@nmsu.edu','start123', 'M', 2, 'NMSU', 'C4', 'S');