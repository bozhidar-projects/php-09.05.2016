create table Students (
	SID long,
	Name varchar(255),
	Avg double
);

create table Universities (
	Name varchar(255),
	Prov varchar(255),
	Enr integer,
	Rec varchar(255)
);

create table Applications (
	SID long,
	UName varchar(255),
	UProv varchar (255),
	Accpd boolean
);