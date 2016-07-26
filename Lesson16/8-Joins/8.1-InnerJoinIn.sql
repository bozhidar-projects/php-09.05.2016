#joins students and applications on their specifict condition (theta join)
select *
from students inner join applications
on students.SID = applications.SID