#Will join the three tables, giving full information about the students, the universities they applied to and their record names
select *
from (students natural join applications) inner join universities
on applications.UName = universities.Name and applications.UProv = universities.Prov
