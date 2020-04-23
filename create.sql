CREATE TABLE Department(
  DepartmentID INT NOT NULL,
  DepartmentName Varchar(50),
  NoOfResearch INT,
  NoOfCitations INT,
  Primary key (DepartmentID)
);

create table Professor(
ProfessorID INT NOT NULL,
DepartmentID INT NOT NULL,
FirstName Varchar(50),
MI char,
LastName Varchar(50),
Email varchar(50),
Primary key (ProfessorID),
Foreign key (DepartmentID) references Department(DepartmentID) on delete cascade
);


create table research(
  Title varchar(250),
  No_of_researchers int,
  Vacancy int,
  Funding double(12,2),
  StartDate date,
  EndDate date,
  Contact_email varchar(40),
  Contact_position text,
  primary key(Title)
);

create table Works_on(
  ProfessorID int, 
  Title varchar(250),
  PRIMARY key(ProfessorID,Title),
  FOREIGN key (ProfessorID) references Professor(ProfessorID) on delete cascade,
  FOREIGN key (Title) references research(Title) on delete cascade

);

Create table In_department(
  DepartmentID int, 
  Title varchar(250),
  Citation_no INT,
  PRIMARY key(DepartmentID, Title) ,
Foreign key (DepartmentID) references Department(DepartmentID) on delete cascade,
Foreign key (Title) references research(Title) on delete cascade


);

create table Research_field(
  Title varchar(250), 
  Field varchar(256), 
  PRIMARY key (Title, Field),
Foreign key (Title) references research(Title) on delete cascade

);
