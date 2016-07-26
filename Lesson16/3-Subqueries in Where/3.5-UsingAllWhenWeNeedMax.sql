#Getting the University with the most enrollments. 
select s1.SID, s1.Name
from students as s1
where s1.Avg >= all (select s2.Avg from students as s2);

#keep in mind that this won't work if there is a null values in the avg column