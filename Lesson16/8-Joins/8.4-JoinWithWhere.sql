#Selects applications and student records, where the student has avg above 5
select *
from students inner join applications using(SID)
where students.Avg > 5