create schema blog;

use blog;

/*Creates table Users with columns:
	"ID" - type int,
	"username" - type string,
	"password" - type string
*/
create table `Users`(
	`ID` int primary key auto_increment,
    `username` varchar(50),
    `password` varchar(50)
);

/*
	Inserts User with username "admin" and password "123". 
	The ID is autoincremented.
*/
insert into `Users`(`username`, `password`)
values('admin', 123);

/*Creates table Universities with columns:
	"ID" - type int,
	"Name" - type string,
*/
create table `Universities` (
	`ID` int primary key auto_increment,
    `Name` varchar(50)
);

/*Creates table Members with columns:
	"ID" - type int,
	"username" - type string,
	"password" - type string
*/
create table `Members` (
	`ID` int primary key auto_increment,
    `Firstname` varchar(50),
    `Lastname` varchar(50),
    `Phone` varchar(10),
    `University_ID` int references `Universities`(`ID`)
);

/*Creates table Articles with columns:
	"ID" - type int,
	"Title" - type string,
	"Author" - type string,
	"Date" - type date,
	"Content" - type text (big string)
*/
create table `Articles` (
	`ID` int primary key auto_increment,
    `Title` varchar(50),
    `Author` varchar(50),
    `Date` date,
    `Content` text
);

/*
	Adds column "Age" of type int to the "Members" table. 
*/
alter table `Members` 
add column (`Age` int);

/*
	selects all records from the "Members" table.
*/
select * from `Members`;

/*
	Adds one university into the `Universities` table with values:
		ID - 1,
		Name - 'Sofia University'
*/
insert into `Universities` VALUES (1, 'Sofia University'); 

/*
	Adds one `Member` into `Members` universities. 
		ID - 1,
		Firstname - "Ivan"
		Lastname - "Ivanov"
		Phone - '948848123',
		University_ID - 1,
		Age - 15
*/
insert into `Members` VALUES (1, 'Ivan', 'Ivanov', '948848123', 1, 15);

/*
	Selects full information about a member, joining the University table to 
	get the name of the university. The information includes the following information
	about the member:
		"ID", "Firstname", "Lastname", "Age", "University(the name of the university)",
		"Phone"
*/
select 	`Members`.`ID`, 
		`Firstname`, 
        `Lastname`, 
        `Age`,
		`Universities`.`Name` as `University`,
        `Phone`
from `Members` 
join `Universities`
on `Members`.`University_ID` = `Universities`.`ID`;