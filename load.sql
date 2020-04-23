LOAD DATA LOCAL INFILE '/home/ashrest2/projectmilestone3/Department.csv' INTO TABLE Department FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' IGNORE 1 ROWS (DepartmentID, DepartmentName, NoOfResearch, NoOfCitations);

LOAD DATA LOCAL INFILE '/home/ashrest2/projectmilestone3/Professor.csv' INTO TABLE Professor FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' IGNORE 1 ROWS (ProfessorID, DepartmentID, FirstName, MI, LastName, Email);

LOAD DATA LOCAL INFILE '/home/ashrest2/projectmilestone3/Research.csv' INTO TABLE research FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' IGNORE 1 ROWS (Title,No_of_researchers, Vacancy, Funding, @startDate,@endDate, Contact_email, Contact_position)
Set StartDate = STR_TO_DATE(@startDate, '%m/%d/%y'),EndDate = STR_TO_DATE(@endDate, '%m/%d/%y');

LOAD DATA LOCAL INFILE '/home/ashrest2/projectmilestone3/Works_on.csv' INTO TABLE Works_on FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' IGNORE 1 ROWS (ProfessorID,Title);

LOAD DATA LOCAL INFILE '/home/ashrest2/projectmilestone3/In_department.csv' INTO TABLE In_department FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' IGNORE 1 ROWS (DepartmentID, Title, Citation_no);

LOAD DATA LOCAL INFILE '/home/ashrest2/projectmilestone3/Research_field.csv' INTO TABLE Research_field FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n' IGNORE 1 ROWS (Title, Field);


