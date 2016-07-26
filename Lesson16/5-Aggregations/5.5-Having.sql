#selects the students that have applied to more then 3 universities
select Name as StudentName, count(*) as appliedToUniversitiesCount
from students, applications
where students.SID = applications.SID
group by Name
having count(*) > 2
order by Name