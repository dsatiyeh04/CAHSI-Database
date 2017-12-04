CREATE TABLE Student (

Sstudent_ID INT(10) NOT NULL AUTO_INCREMENT,
Sname VARCHAR(40) NOT NULL,
Semail VARCHAR(30) NOT NULL,
Spassword VARCHAR(8) NOT NULL,
Sgender CHAR(1) NOT NULL,
Smajor VARCHAR(15) NOT NULL,
Sethnicity VARCHAR(15) NOT NULL,
Umentor_ID INT(10) NOT NULL,
Ins_ID CHAR(10) NOT NULL,
Cclassification_ID CHAR(2) NOT NULL,
Rrole_ID VARCHAR(1) NOT NULL,

PRIMARY KEY (Sstudent_ID),

FOREIGN KEY (Umentor_ID) 
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
VALUES	(1,'Juan Saenz', 'juan.saenz@utep.edu', 'start123', 'M', 'Engineering', 'Hispanic or Latino', 1, 'EPCC', 'C1', 'S'), (2,'Patricia Watson', 'patricia.watson@cclg.edu', 'password', 'F', 'Science', 'Black/African American', 3, 'UTEP', 'C3', 'S'), (3,'Will Byers', 'will.smith@nmsu.edu','start123', 'M', 'Technology', 'White', 1, 'NMSU', 'C4', 'S');