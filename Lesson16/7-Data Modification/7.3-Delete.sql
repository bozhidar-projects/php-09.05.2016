#Allows for record deletions
SET SQL_SAFE_UPDATES=0;

#deletes student with SID = 912
delete from students
where SID = 912;

#sets the safe mode back
SET SQL_SAFE_UPDATES=1;
