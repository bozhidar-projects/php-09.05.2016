#Getting the University with the most enrollments
select *
from universities as u1
where not exists (select * from universities as u2 where u2.Enr > u1.Enr);