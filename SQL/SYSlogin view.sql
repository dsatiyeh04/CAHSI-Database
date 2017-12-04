CREATE TABLE SYSlogin AS
SELECT Rrole_ID as Role, Uemail as SYSemail, Upassword as SYSpassword
FROM User
UNION
SELECT Rrole_ID as Role, Semail as SYSemail, Spassword as SYSpassword
FROM Student
UNION 
SELECT Rrole_ID as Role, Aemail as SYSemail, Apassword as SYSpassword
FROM Admin;