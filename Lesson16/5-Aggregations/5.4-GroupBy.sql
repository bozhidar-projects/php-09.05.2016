#selects how many universities each students has applied to
select Name, count(*) as appliedToUniversitiesCount
from students, applications
where students.SID = applications.SID
group by Name
order by Name