#Drops the schema if exists 
drop schema if exists student_applications;

create schema student_applications;
use student_applications;

#Create Tables
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

#Insert Students
insert into Students (SID, Name, Avg) values (412, "Iva", 5.86);
insert into Students (SID, Name, Avg) values (513, "Delqn", 5.10);
insert into Students (SID, Name, Avg) values (516, "Georgi", 5.90);
insert into Students (SID, Name, Avg) values (519, "Todor", 5.15);
insert into Students (SID, Name, Avg) values (412, "Petar", 5.30);
insert into Students (SID, Name, Avg) values (416, "Nikola", 4.90);
insert into Students (SID, Name, Avg) values (417, "Hristo", 5.00);
insert into Students (SID, Name, Avg) values (419, "Ivan", 5.75);
insert into Students (SID, Name, Avg) values (429, "Margarita", 4.64);
insert into Students (SID, Name, Avg) values (523, "Zornica", 5.15);
insert into Students (SID, Name, Avg) values (714, "Nikoleta", 5.35);
insert into Students (SID, Name, Avg) values (728, "Marina", 5.26);
insert into Students (SID, Name, Avg) values (781, "Vqra", 5.86);
insert into Students (SID, Name, Avg) values (792, "Iskra", 5.30);
insert into Students (SID, Name, Avg) values (793, "Tosho", 3);

#Insert Universities
insert into Universities (Name, Prov, Enr, Rec) value ("AUBG", "Blagoevgrad", 10000, "Ivan");
insert into Universities (Name, Prov, Enr, Rec) value ("NBU", "Sofia", 15000, "Konstantin");
insert into Universities (Name, Prov, Enr, Rec) value ("TU", "Sofia", 40000, "Nikolai");
insert into Universities (Name, Prov, Enr, Rec) value ("TU", "Varna", 10000, "Ivan");
insert into Universities (Name, Prov, Enr, Rec) value ("SU", "Sofia", 30000, "Nikola");
insert into Universities (Name, Prov, Enr, Rec) value ("MU", "Sofia", 20000, "Stanislav");
insert into Universities (Name, Prov, Enr, Rec) value ("UNWE", "Sofia", 35000, "Boris");

#Insert Applications
insert into Applications (SID, UName, UProv, Accpd) values (412, "AUBG", "Blagoevgrad", 1);
insert into Applications (SID, UName, UProv, Accpd) values (412, "NBU", "Sofia", 0);
insert into Applications (SID, UName, UProv, Accpd) values (412, "TU", "Varna", 0);
insert into Applications (SID, UName, UProv, Accpd) values (513, "SU", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (513, "TU", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (516, "MU", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (519, "UNWE", "Sofia", 0);
insert into Applications (SID, UName, UProv, Accpd) values (412, "MU", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (416, "UNWE", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (416, "TU", "Sofia", 0);
insert into Applications (SID, UName, UProv, Accpd) values (417, "AUBG", "Blagoevgrad", 0);
insert into Applications (SID, UName, UProv, Accpd) values (417, "NBU", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (417, "SU", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (419, "UNWE", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (419, "NBU", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (429, "SU", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (429, "MU", "Sofia", 0);
insert into Applications (SID, UName, UProv, Accpd) values (523, "TU", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (523, "TU", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (714, "UNWE", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (728, "UNWE", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (728, "MU", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (781, "AUBG", "Blagoevgrad", 1);
insert into Applications (SID, UName, UProv, Accpd) values (781, "SU", "Sofia", 1);
insert into Applications (SID, UName, UProv, Accpd) values (792, "AUBG", "Blagoevgrad", 1);
insert into Applications (SID, UName, UProv, Accpd) values (792, "AUBG", "Blagoevgrad", 1);
insert into Applications (SID, UName, UProv, Accpd) values (793, "TU", "Varna", 0);